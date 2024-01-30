<?php
@include 'config.php';

session_start();

if(isset($_POST['submit'])){

    // $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass =md5($_POST['password']);
    // $cpass= md5($_POST['cpassword']);
    // $user_type = $_POST ['user_type'];

    $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_array($result);

        if($row['user_type'] == 'admin'){
            
            $_SESSION['admin_name'] = $row['name'];
            header('location:admin_page.php');
        
        }elseif($row['user_type'] == 'user'){
            
            $_SESSION['user_name'] = $row['name'];
            header('location:user_page.php');
        }
   }else{
       $error[]= 'Incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- Linku per css -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav>
        <img src="C:\Users\melis\OneDrive\Documents\GitHub\Pharmacy-Project\assets\Logoja e artpharm-03.png" alt="art pharm" id="Logo" >
        <a href="index.php">Home</a>
        <a href="aboutUs.html">About Us</a>
        <a href="catalog.html">Catalog</a>
        <a href="contactUs.html">Contact</a>
        <a href="admin_page.php">
            <img src="C:\Users\melis\OneDrive\Documents\GitHub\Pharmacy-Project\assets\login icon  kalter edhe hint-05.png" class="iconaLogin" ></a>

    </nav>
    <div class="form-container">
        <form action="" method="post">
            <h3>Login now</h3>
            <?php 
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };
            ?>
            <input  type="email" name="email" required placeholder="enter your email">
            <input  type="password" name="password" required placeholder="enter your password">
            <input type="submit" name="submit" value="login now" class="form-btn">
            <p>don't have an account? <a href="register_form.php">Register Now</a></p>

        </form>
    </div>
</body>
</html>