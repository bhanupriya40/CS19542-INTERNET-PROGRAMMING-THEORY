<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'content_creator') {
    header("Location: login.php");
    exit;
}

include('php/db.php');

$post_id = $_GET['id'];
$sql = "SELECT * FROM posts WHERE id = $post_id";
$result = $conn->query($sql);
$post = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Post</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<?php include 'php/navbar.php'; ?>

<div class="container mt-5">
    <h2>Edit Blog Post</h2>
    <form action="php/edit_post_process.php" method="POST">
        <input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
        <div class="form-group">
            <label for="title">Post Title</label>
            <input type="text" name="title" class="form-control" value="<?php echo $post['title']; ?>" required>
        </div>
        <div class="form-group">
            <label for="description">Post Description</label>
            <textarea name="description" class="form-control" rows="2" required><?php echo $post['description']; ?></textarea>
        </div>
        <div class="form-group">
            <label for="content">Post Content</label>
            <textarea name="content" class="form-control" rows="5" required><?php echo $post['content']; ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
