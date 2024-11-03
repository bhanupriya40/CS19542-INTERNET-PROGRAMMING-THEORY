<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechDigitalStories - Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">TechDigitalStories</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="portfolio.php">Portfolio</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
                    <div class="dropdown-menu" aria-labelledby="categoriesDropdown">
                        <a class="dropdown-item" href="#">General</a>
                        <a class="dropdown-item" href="#">Lifestyle</a>
                        <a class="dropdown-item" href="#">Travel</a>
                        <a class="dropdown-item" href="#">Design</a>
                        <a class="dropdown-item" href="#">Creative</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                <li class="nav-item"><a class="btn btn-primary" href="signup.php">Get Started</a></li>
            </ul>
        </div>
    </nav>

    <!-- Carousel -->
    <div id="featuredCarousel" class="carousel slide mt-3" data-ride="carousel">
        <style>
            /* Style for the carousel caption text */
            #featuredCarousel .carousel-caption h5 {
                color: #00e1ff;
                font-weight: 900;
                /* Change to your desired color */
                font-family: 'Arial', sans-serif;
                /* Change to your desired font */
                font-size: 2em;
                /* Adjust font size */
            }

            #featuredCarousel .carousel-caption p {
                color: #000000;
                font-weight: 700;
                /* Change to your desired color */
                font-family: 'Verdana', sans-serif;
                /* Change to your desired font */
                font-size: 1.5em;
                /* Adjust font size */
            }

            /* Style for the carousel indicators */
            #featuredCarousel .carousel-indicators li {
                background-color: #00fbff;
                /* Change to your desired color */
            }

            #featuredCarousel .carousel-indicators .active {
                background-color: #0033ff;
                /* Change to a different color for the active indicator */
            }
        </style>
        <ol class="carousel-indicators">
            <li data-target="#featuredCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#featuredCarousel" data-slide-to="1"></li>
            <li data-target="#featuredCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div  class="carousel-item active">
                <img class="image" src="img/blog1.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Featured Story 1</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="image" src="img/blog2.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Featured Story 2</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="image" src="img/blog3.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Featured Story 3</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#featuredCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#featuredCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Blog Post Grid -->
    <div class="container mt-5">
        <h2>Latest Blog Posts</h2>
        <div class="row">
            <!-- Fetch blog posts from the database here -->
            <?php
            include('php/get_posts.php');
            ?>
        </div>

        <div class="mt-4">
            <a href="add_post.php" class="btn btn-success">Add New Post</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>