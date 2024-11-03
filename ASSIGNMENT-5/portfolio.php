<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - TechDigitalStories</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <!-- Navbar -->
    <?php include 'php/navbar.php'; ?>

    <!-- Portfolio Content -->
    <div class="container mt-5">
        <h1>Our Portfolio</h1>
        <p>Check out some of our featured blog categories and recent posts:</p>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="img/technology.jpeg" class="port card-img-top" alt="Portfolio Image 1">
                    <div class="card-body">
                        <h5 class="card-title">Technology Blogs</h5>
                        <p class="card-text">Latest trends and insights on technology.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="img/cd.jpg" class="port card-img-top" alt="Portfolio Image 2">
                    <div class="card-body">
                        <h5 class="card-title">Creative Design</h5>
                        <p class="card-text">Showcasing creativity in modern design.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="img/travel.jpg" class="port card-img-top" alt="Portfolio Image 3">
                    <div class="card-body">
                        <h5 class="card-title">Travel Experiences</h5>
                        <p class="card-text">Explore travel stories from around world.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
