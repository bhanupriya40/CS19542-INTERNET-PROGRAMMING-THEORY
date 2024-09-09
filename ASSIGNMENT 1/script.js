let tasks = []; 
function addTask(event) {
    event.preventDefault();
    const taskTitle = document.getElementById("taskTitle").value;
    const taskDesc = document.getElementById("taskDesc").value;
    const taskDueDate = document.getElementById("taskDueDate").value;

    if (!taskTitle || !taskDueDate) {
        alert("Please fill in all required fields");
        return;
    }

    const newTask = {
        id: Date.now(),
        title: taskTitle,
        description: taskDesc,
        dueDate: taskDueDate,
        completed: false
    };

    tasks.push(newTask);
    displayTasks(); 
    document.getElementById("taskForm").reset();
}


function displayTasks(filter = 'all') {
    const taskList = document.getElementById("taskList");
    taskList.innerHTML = "";

    let filteredTasks = tasks;
    if (filter === 'pending') {
        filteredTasks = tasks.filter(task => !task.completed);
    } else if (filter === 'completed') {
        filteredTasks = tasks.filter(task => task.completed);
    }

    filteredTasks.forEach(task => {
        const taskItem = document.createElement("li");
        taskItem.classList.add(task.completed ? 'completed' : '');

        taskItem.innerHTML = `
            <div>
                <input type="checkbox" ${task.completed ? 'checked' : ''} onchange="toggleTask(${task.id})">
                <strong>${task.title}</strong><br>
                <small>${task.description}</small><br>
                <small>Due: ${task.dueDate}</small>
            </div>
            <div>
                <button onclick="editTask(${task.id})">Edit</button>
                <button onclick="deleteTask(${task.id})">Delete</button>
            </div>
        `;

        taskList.appendChild(taskItem);
    });
}


function editTask(taskId) {
    const task = tasks.find(t => t.id === taskId);
    document.getElementById("taskTitle").value = task.title;
    document.getElementById("taskDesc").value = task.description;
    document.getElementById("taskDueDate").value = task.dueDate;

    deleteTask(taskId); 
}


function deleteTask(taskId) {
    tasks = tasks.filter(t => t.id !== taskId);
    displayTasks();
}


function toggleTask(taskId) {
    const task = tasks.find(t => t.id === taskId);
    task.completed = !task.completed;
    displayTasks();
}


function filterTasks(filter) {
    displayTasks(filter);
}