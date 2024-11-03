<?php
session_start();
include('db.php');

$post_id = $_POST['post_id'];
$title = $_POST['title'];
$description = $_POST['description'];
$content = $_POST['content'];

$sql = "UPDATE posts SET title='$title', description='$description', content='$content' WHERE id=$post_id";
if ($conn->query($sql) === TRUE) {
    header("Location: ../admin_dashboard.php");
} else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();
?>
