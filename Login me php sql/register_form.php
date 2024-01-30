<?php

@include 'config.php';

if(isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass =md5($_POST['password']);
    $cpass= md5($_POST['cpassword']);
    $user_type = $_POST ['user_type'];

    $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass' &&  name= '$name' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0) {

        $error[]='User alreay exists!';

    }else{
        if($pass != $cpass){
            $error[]= 'password not matched';
        }else{
            $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass', '$user_type')";
            mysqli_query($conn, $insert);
            header('location:login_form.php');
        }
    }
};
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <!-- Linku per css -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav>
        <img src="C:\Users\melis\OneDrive\Documents\GitHub\Pharmacy-Project\assets\Logoja e artpharm-03.png" alt="art pharm" id="Logo" >
        <a href="aboutUs.html">About Us</a>
        <a href="catalog.html">Catalog</a>
        <a href="contactUs.html">Contact</a>
        <a href="admin_page.php">
            <img src="C:\Users\melis\OneDrive\Documents\GitHub\Pharmacy-Project\assets\login icon  kalter edhe hint-05.png" class="iconaLogin" ></a>

    </nav>
    <div class="form-container">
        <form action="" method="post">
            <h3>Register now</h3>
            <?php
            if(isset($error)){
               foreach ($error as $error) {
                echo '<span class="error-msg">'.$error.'</span>';
               };
            };
            ?>
            <input type="text" name="name" required placeholder="enter your name">
            <input type="text" name="email" required placeholder="enter your email">
            <input type="password" name="password" required placeholder="enter your password">
            <input type="password" name="cpassword" required placeholder="confirm your password">
            <select name="user_type">
                <option value="user">user</option>
                <option value="admin">admin</option> 
            </select>
            <input type="submit" name="submit" value="register now" class="form-btn">
            <p>already have an account? <a href="login_form.php">Login Now</a></p>

        </form>
    </div>
    
</body>
</html>