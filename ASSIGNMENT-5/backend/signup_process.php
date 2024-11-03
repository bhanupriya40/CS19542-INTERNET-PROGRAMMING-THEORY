<?php
include('db.php');

// Check if all required POST variables are set
if (isset($_POST['username'], $_POST['email'], $_POST['password'], $_POST['role'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role']; // Capture the role from the form

    // Prepare SQL statement
    $sql = "INSERT INTO users (username, email, password, role) VALUES ('$username', '$email', '$password', '$role')";
    
    // Execute the query and handle the result
    if ($conn->query($sql) === TRUE) {
        echo "Account created successfully!";
        header("Location: ../index.php");
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "Error: Missing data. Please fill all fields.";
}

$conn->close();
?>
