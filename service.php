
<?php
// services.php

// Array of services
$services = [
    [
        'title' => 'Top Picks for Your Home',
        'description' => 'Discover our most popular plants that customers love. From elegant fiddle leaf figs to versatile snake plants, these favorites are perfect for adding a touch of nature to any room. Easy to care for and stylish, they bring life and freshness to your space.',
        'image' => 'images/popular.jpg'
    ],
    [
        'title' => 'Nurture Your Green Friends',
        'description' => 'Learn how to care for your plants with our expert tips. Whether you\'re a beginner or a seasoned plant parent, our advice on watering, lighting, and fertilizing will help your plants thrive. Keep your green friends happy and healthy with our simple and practical guidance.',
        'image' => 'images/nurture.jpg'
    ],
    [
        'title' => 'Explore Unique Varieties',
        'description' => 'Looking for something different? Explore our collection of unique and rare plants. From exotic tropical species to unusual cacti and succulents, these special plants are sure to be conversation starters. Add a distinctive touch to your home or collection with these rare beauties.',
        'image' => 'images/rare.jpg'
    ]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Our Services - Leafy Oasis</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Leafy Oasis</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link active" href="services.php">Services</a></li>
            <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
            <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
        </ul>
    </div>
</nav>

<section class="my-5">
    <div class="container">
        <h2 class="text-center">Our Services</h2>
        <div class="row mt-4">
            <?php foreach ($services as $service): ?>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card mb-4">
                        <img src="<?php echo $service['image']; ?>" class="card-img-top" alt="<?php echo $service['title']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $service['title']; ?></h5>
                            <p class="card-text"><?php echo $service['description']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<footer class="text-center p-4 bg-dark text-white">
    <p>&copy; <?php echo date('Y'); ?> Leafy Oasis. All rights reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
