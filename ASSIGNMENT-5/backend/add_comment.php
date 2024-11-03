<?php
include('db.php');

$post_id = $_POST['post_id'];
$comment = $_POST['comment'];
$user_id = 1; // Placeholder for logged-in user ID

$sql = "INSERT INTO comments (post_id, user_id, comment) VALUES ($post_id, $user_id, '$comment')";
if ($conn->query($sql) === TRUE) {
    header("Location: ../blog.php?id=$post_id");
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
