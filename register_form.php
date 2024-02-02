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
            <select name="user_type" id="" size="1" onchange="window.location.href=this.value;">
                <option value="user">user</option>
                <!-- emaili edhe passwordi per admin page osht veq 1 :
                bekamirela2@gmail.com
                pass:abd 
            NESE E PREK BUTONIN ADMIN TQON DIREKT TE LOGIN
            NUK PRANON EMAIL TJETER PERVEQ QASAJ QE E CEKA MA NALT-->
               <option value="http://localhost:3000/admin_page.php">admin</option> 

            </select> 
            <input type="submit" name="submit" value="register now" class="form-btn">
            <p>already have an account? <a href="login_form.php">Login Now</a></p>

        </form>
    </div>
    
</body>
</html>