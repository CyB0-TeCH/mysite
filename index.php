
PHP

<?php 

include 'functions.php';
include 'database.php'; 
?>

<!DOCTYPE html>  
    
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gruppo&family=Ubuntu+Sans:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Font+Name">
    <style> body {
        font-family: 'Tangerine', serif;
        font-size: 48px;
      }
    </style>
    <title>Bongaurd</title>
    <div class="head-container">
         <img class="small-logo" size="50px 50px"alt="I">
           <h1 class="head-banner" a href="file:///media/fuse/drivefs-1c3db27767cea2066eac18ecc3b0843c/root/website/strong-hold/images/security-site-header.png"> Tag Goes Here</h1>
    </div>
</head>
    <body>
         <header>
             <div class="main-page-nav-bar">
            <nav id="main-menu">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>

            <div class="image-logo">
                <img src="image-url"></div>
        <div class="text-logo">        
                <h2 class="page-title">page-title</h2>
            </div>    
       </header> 
        <main>
 <div class="page-wrapper">
            <div class="container"></div>
       <div id="slider"></div>
</main>
        <footer class="page-footer">
        <div class="container">
          
            <p> My Website echo &copy; All rights reserved.</p>
                 <p> <?php echo date(); ?> </p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
