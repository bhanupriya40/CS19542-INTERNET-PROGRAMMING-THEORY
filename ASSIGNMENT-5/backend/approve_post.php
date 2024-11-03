<?php
session_start();
include('db.php');

if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin') {
    header("Location: ../login.html");
    exit;
}

$post_id = $_GET['id'];
$sql = "UPDATE posts SET status='Published' WHERE id=$post_id";
if ($conn->query($sql) === TRUE) {
    header("Location: ../admin_dashboard.php");
} else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();
?>
