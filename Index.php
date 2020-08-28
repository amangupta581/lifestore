<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Lifestyle Store</title>
<link href="style.css" rel="stylesheet" type="text/css"/>


</head>
<body>
    <div class="header">
        <div class="inner-header">
            <div class="logo">
                <a href="https://www.lifestylestores.com/in/en/">Lifestyle Store</a>
            </div>
            <div class="header-link">
                <a href="http://localhost/form/regis.php">Sign up</a>
             </div>
            <div class="header-link">
                <a href="http://localhost/form/login.php">login</a>
            </div>       
            
        </div>
    </div>
    <div class="content">
        <div class="banner-img">
            <div class="inner-banner-image">
                <div class="banner_content">
                    <h1>
                         We sell lifestyle
                    </h1>
                    <p>
                        Flat 40% OFF on premium brands<?php 
                        if(isset($_SESSION['name'])){
                            echo $_SESSION['name'];
                        }else{
                            echo "";
                        }
                        ?>
 
                    </p>
                    <a class="button" href="https://www.amazon.in/">Shop Now</a>
                </div>
            </div>
        </div>
    
    <div class="container">
        <div class="items">
            <a href="https://www.myntra.com/watches">
                <img src="img/watch.jpg" alt="Watches" class="thumbnail">
 <div class="caption">
 <h2>Watches</h2>
 <p>Original watches from the
best brands</p>
 </div>
            </a>
        </div>
        <div class="items">
 <a href="https://www.amazon.in/camera-photography/b?ie=UTF8&node=1388977031" >
 <img src="img/camera.jpg" alt="Cameras" class="thumbnail">
 <div class="caption">
 <h2>Cameras</h2>
 <p>Choose among the best available in the world.</p>
 </div>
 </a>
 </div>
        <div class="items">
 <a href="https://www.myntra.com/shirts" >
 <img src="img/shirt.jpg" alt="shirts" class="thumbnail">
 <div class="caption">
 <h2>Shirts</h2>
 <p>our exquisite collection of shirts</p>
 </div>
 </a>
 </div>
        
    </div>
    </div>
    <footer>
    <div class="container">
        <p class="bo">
            Copyright © Lifestyle Store. All Rights
Reserved | Contact Us: +91 95750 37200 | Aman Kumar Gupta
        </p>
        
    </div>
    </footer>
    
</body>
</html>