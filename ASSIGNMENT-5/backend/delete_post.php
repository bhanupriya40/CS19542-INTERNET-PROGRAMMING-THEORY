<?php
session_start();
include('db.php'); // Include database connection

if (isset($_GET['id'])) {
    $post_id = intval($_GET['id']); // Get the post ID from the URL

    // Prepare and execute the delete statement
    $sql = "DELETE FROM posts WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $post_id); // Bind the post ID

    if ($stmt->execute()) {
        // Redirect after successful deletion
        header("Location: ../admin_dashboard.php?message=Post deleted successfully");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    $stmt->close();
} else {
    echo "No post ID specified.";
}

$conn->close();
?>
