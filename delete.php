<?php
    $id=$_GET['id'];
    $Conn = new PDO("mysql:host=localhost;dbname=task1","root","");
    $query = "update users set status=0 where uid=$id";
    $stat = $Conn->prepare($query);
    $stat->execute();
    echo '<script>alert("Data Deleted successfully")</script>';
    header("Location:./dashboard.php");
    
?>

