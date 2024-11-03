<?php
include('db.php');

$sql = "SELECT * FROM posts ORDER BY created_at DESC LIMIT 6";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="img/' . $row['image'] . '" class="card-img-top" alt="' . $row['title'] . '">
                <div class="card-body">
                    <h5 class="card-title">' . $row['title'] . '</h5>
                    <p class="card-text">' . substr($row['content'], 0, 100) . '...</p>
                    <a href="blog.php?id=' . $row['id'] . '" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>';
    }
} else {
    echo "<p>No posts available</p>";
}
$conn->close();
?>
