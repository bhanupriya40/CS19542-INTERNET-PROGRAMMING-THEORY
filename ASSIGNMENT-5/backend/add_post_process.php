<?php
include('db.php');

// Get form data
$title = $_POST['title'];
$description = $_POST['description'];
$content = $_POST['content'];
$author_id = $_POST['author_id']; // New author_id input
$category = $_POST['category']; // New category input
$status = $_POST['status']; // New status input

// Image upload handling
$image = $_FILES['image']['name'];
$target_dir = "../img/";
$target_file = $target_dir . basename($image);

// Move uploaded file to the target directory
if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
    $image_path = basename($image);
} else {
    echo "Error uploading the image.";
    exit;
}

// Insert post into the database
$sql = "INSERT INTO posts (title, description, content, image, author_id, category, status) 
        VALUES ('$title', '$description', '$content', '$image_path', '$author_id', '$category', '$status')";
if ($conn->query($sql) === TRUE) {
    echo "Post added successfully!";
    header("Location: ../index.php");
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
