<?php
include('php/db.php');
$post_id = $_GET['id'];

$sql = "SELECT * FROM posts WHERE id=$post_id";
$result = $conn->query($sql);
$post = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $post['title']; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- Navbar Code Here -->
    
    <!-- Blog Post Content -->
    <div class="container mt-5">
        <h1><?php echo $post['title']; ?></h1>
        <p><?php echo $post['content']; ?></p>

        <!-- Comments Section -->
        <h3>Comments</h3>
        <!-- Fetch comments from the database -->
        <?php
            $sql = "SELECT * FROM comments WHERE post_id=$post_id ORDER BY created_at DESC";
            $comments = $conn->query($sql);
            while ($comment = $comments->fetch_assoc()) {
                echo "<p><strong>" . $comment['user_id'] . ":</strong> " . $comment['comment'] . "</p>";
            }
        ?>

        <!-- Comment Form -->
        <form action="php/add_comment.php" method="POST">
            <input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
            <textarea name="comment" class="form-control" rows="3" placeholder="Leave a comment..."></textarea>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
