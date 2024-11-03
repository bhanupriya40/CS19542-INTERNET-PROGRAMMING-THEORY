<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Post</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>

<?php include 'php/navbar.php'; ?>

<div class="container mt-5">
    <h2>Add a New Blog Post</h2>
    <form action="php/add_post_process.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Post Title</label>
            <input type="text" name="title" class="form-control" id="title" required>
        </div>
        <div class="form-group">
            <label for="description">Post Description</label>
            <textarea name="description" class="form-control" id="description" rows="2" required></textarea>
        </div>
        <div class="form-group">
            <label for="content">Post Content</label>
            <textarea name="content" class="form-control" id="content" rows="5" required></textarea>
        </div>
        <div class="form-group">
            <label for="image">Upload Image</label>
            <input type="file" name="image" class="form-control-file" id="image" required>
        </div>
        <div class="form-group">
            <label for="author_id">Author ID</label>
            <input type="number" name="author_id" class="form-control" id="author_id" required>
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <input type="text" name="category" class="form-control" id="category" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" class="form-control" id="status" required>
                <option value="draft">Draft</option>
                <option value="published">Published</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit Post</button>
    </form>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
