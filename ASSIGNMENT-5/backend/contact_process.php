<?php
include('db.php');

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";
if ($conn->query($sql) === TRUE) {
    echo "Message sent successfully!";
    header("Location: ../contact.php");
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
