$(document).ready(function() {
    let score = 0;
    let spawnInterval; // For storing the spawn interval ID
    let spawnSpeed = 2000; // Default spawn speed in milliseconds (adjustable based on admin settings)

    // Fetch username for display
    $('#username-display').text(localStorage.getItem('username'));

    // Function to start the object spawning
    function startSpawning() {
        spawnInterval = setInterval(spawnObject, spawnSpeed); // Start spawning at defined intervals
    }

    // Spawn object function
    function spawnObject() {
        // Remove any existing objects
        $('.object').remove(); // Remove previous object if any

        // Create new object
        const object = $('<div class="object"></div>').css({
            position: 'absolute',
            width: '30px',
            height: '30px',
            backgroundColor: getRandomColor(),
            top: Math.random() * (370 - 30) + 'px', // Ensure it spawns within the visible area
            left: Math.random() * (270 - 30) + 'px' // Ensure it spawns within the visible area
        });

        // Add click event for the new object
        object.click(function() {
            $(this).fadeOut(300, function() {
                $(this).remove();
                score++;
                $('#score').text(score);
                updateScoreOnServer(score); // Update score in the database
            });
        });

        // Append the new object to the game area
        $('#game-area').append(object);
    }

    function updateScoreOnServer(newScore) {
        const username = localStorage.getItem('username'); // Retrieve the username from local storage
    
        $.ajax({
            url: 'php/update_score.php',
            type: 'POST',
            data: { username: username, score: newScore }, // Include the username in the request
            success: function(response) {
                const result = JSON.parse(response);
                console.log('Score update response:', result);
                if (result.status === 'error') {
                    console.error('Error updating score:', result.message);
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX error:', error);
            }
        });
    }
    

    // Function to get a random color
    function getRandomColor() {
        const letters = '0123456789ABCDEF';
        let color = '#';
        for (let i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }

    // Start the game by spawning the first object
    $('#start-game-btn').click(function() {
        startSpawning(); // Call function to stop spawning
    }); // Start spawning objects

    // Function to stop the spawning of objects
    function stopSpawning() {
        clearInterval(spawnInterval); // Stop the spawning interval
        alert(`Game Over! Your final score is ${score}.`); // Alert final score
        $('#game-area').empty(); // Clear the game area
        $('#score').text(0); // Show the final score
    }

    // Event listener for the Stop Game button
    $('#stop-game-btn').click(function() {
        stopSpawning(); // Call function to stop spawning
    });

    // Example function to adjust game speed (to be called based on admin settings)
    function setGameSpeed(newSpeed) {
        clearInterval(spawnInterval); // Clear the current interval
        spawnSpeed = newSpeed; // Update spawn speed
        startSpawning(); // Restart spawning with the new speed
    }

    // Simulate changing speed for testing (can be removed or replaced with actual admin logic)
    setTimeout(() => {
        setGameSpeed(1000); // Example: Change speed to every 1 second after 10 seconds
    }, 10000);
});
