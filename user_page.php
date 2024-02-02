<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['user_name'])){
    header('location:login_form.php');
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User page</title>
    <!-- linku per css -->
    <title>LoginRegister | ArtPharm</title>
    <link rel="stylesheet" href="style.css">
    
</head>

<body>
<nav>
        <img src="C:\Users\melis\OneDrive\Documents\GitHub\Pharmacy-Project\assets\Logoja e artpharm-03.png" alt="art pharm" id="Logo" >
        <a href="index.php">Home</a>
        <a href="aboutUs.html">About Us</a>
        <a href="catalog.html">Catalog</a>
        <a href="contactUs.html">Contact</a>
    </nav>
   
   <div class="container">
    <div class="content">
        <h3>Hi, <span>User</span></h3>
        <h1>Welcome <span>
            <?php echo $_SESSION['user_name'] ?>
        </span></h1>
        <p>This Is An User Page</p>
        <a href="login_form.php" class="btn">Login</a>
        <a href="register_form.php" class="btn">Register</a>
        <a href="logout.php" class="btn">Logout</a>
        
    </div>
   </div>
    
</body>
</html>