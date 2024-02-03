<?php

$conn= mysqli_connect('localhost','root','','user_db') or die("connection failed : ".mysqli_connect_error());

if($con){
    echo "Connection Successful";
}
else{

    echo "Connection failed";
}
//check connection
if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL :" .mysqli_connect_error();
}
?>