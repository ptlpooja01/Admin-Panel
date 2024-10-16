<?php

    include 'connection.php';
    $email=$_POST['email'];
    $password=$_POST['password'];

    $email=stripcslashes($email);
    $password=stripslashes($password);
    $username=mysqli_real_escape_string($conn,$email);
    $password=mysqli_real_escape_string($conn,$password);

    $sql="select * from login where email='$email' and password='$password'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count=mysqli_num_rows($result);

    if($count==1){
        header("Location:dashboard.php");
    }
    else{
        echo"Failed";
    }

?>
