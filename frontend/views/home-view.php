<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!--Inria Font-->
    <!--Poppins Font-->
    <!--Inter Font-->
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans&family=Inter&family=Poppins:ital,wght@1,500&display=swap" rel="stylesheet">
    <!--Style Sheets-->
    <link rel="stylesheet" href="../styles/home-style.css">
    <link rel="stylesheet" href="../styles/navbar-style.css">
</head>
<body>

<!--Navigation Bar-->
<div class="topnav">
    <div class="topnav-home">
        <a class="home" href="home-view.php">I am PrasithaJ</a>
    </div>
    <div class="topnav-menu">
        
        <a href="#news">About</a>
        <a href="#portfolio">Portfolio</a>
        <a href="#skills">Skills</a> 
        <a href="#contact">Contact</a>  
    </div>


    <!-- Add login and sign-in -->
    <div class="topnav-right">
        <a href="login-view.php">Login</a>
        <a href="signin-view.php">Sign In</a>
    </div>
</div>




<!--Website Start-->
<div class="scroll">
    <div class="hero">
        <h3>Showcasing</h3>
        <h2>my</h2>
        <h1> Web Development <br> Expertise</h1>
    </div>
</div>

<!-- Local Navigation Bar -->
<div class="homenav">
    <ul>
        <li><button class="scroll-button" id="scroll-button-myFeatures" data-target="my-features" onclick="myFeatures()">My Features</button></li>
        <li><button class="scroll-button" data-target="portfolio">Portfolio</button></li>
        <li><button class="scroll-button" data-target="gallery">Gallery</button></li>
        <li><button class="scroll-button" data-target="my-work">Things I Do</button></li>
        <li><button class="scroll-button" data-target="contact-me">Contact Me</button></li>
    </ul>
</div>

<!-- My Features Section -->
<div class="scroll" id="my-features">
    <h2>My Features Section</h2>
    <!-- Add your content for the My Features section here -->
</div>

<!-- Portfolio Section -->
<div class="scroll" id="portfolio">
    <h2>Portfolio Section</h2>
    <!-- Add your content for the Portfolio section here -->
</div>

<!-- Gallery Section -->
<div class="scroll" id="gallery">
    <h2>Gallery Section</h2>
    <!-- Add your content for the Gallery section here -->
</div>

<!-- My Work Section -->
<div class="scroll" id="my-work">
    <h2>Things I Do</h2>
    <!-- Add your content for the My Work section here -->
</div>

<!-- Contact Me Section -->
<div class="scroll" id="contact-me">
    <h2>Contact Me Section</h2>
    <!-- Add your content for the Contact Me section here -->
</div>
  
<script src="../js/home-navigation.js"></script>
<script src="../js/home-animation.js"></script>
</body>
</html>
