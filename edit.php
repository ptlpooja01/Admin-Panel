<?php
    include 'connection.php';
    $uid=$_GET['id'];

    $sql="select * from users where uid='$uid'";
    $query=mysqli_query($conn,$sql);
    $r=mysqli_fetch_assoc($query);

    if(isset($_POST['update']))
    {
    $uid=$_GET['id'];
    $ufname=$_POST['fname'];
    $ulname=$_POST['lname'];
    $uemail=$_POST['email'];
    $ucontactno=$_POST['contactno'];
    $uaddress=$_POST['address'];
    $update = "update users set fname='$ufname',lname='$ulname',email='$uemail',contactno='$ucontactno',address='$uaddress'where uid='$uid'";
    $data = mysqli_query($conn,$update);

    if($data){
        echo "<script> alert('Data Updated Successfully)</script>";
        header("Location:view.php");
    }
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Update Users</title>
</head>
<body class="addbody">
    <div class="containerusers">
    <div class="addrow">
                <div class="input-box-add">
                   <h1>Update Users </h1>
                   <form action="" method="post">
                        <div class="input-field-add">
                            <input type="text" class="input-add" id="fname" autocomplete="off" name="fname" value="<?php echo $r['fname'];?>">
                            <label for="fname">First Name</label> 
                        </div>
                        <div class="input-field-add">
                            <input type="text" class="input-add" id="lname" autocomplete="off" name="lname" value="<?php echo $r['lname'];?>">
                            <label for="lname">Last Name</label> 
                        </div>
                        <div class="input-field-add">
                            <input type="text" class="input-add" id="email" autocomplete="off" name="email" value="<?php echo $r['email'];?>">
                            <label for="email">Email</label> 
                        </div> 
                        <div class="input-field-add">
                            <input type="text" class="input-add" id="pass"  name="contactno" maxlength="10" value="<?php echo $r['contactno'];?>">
                            <label for="pass">Contact Number</label>
                        </div> 
                        <div class="input-field-add">
                            <input type="text" class="input-add" id="name" autocomplete="off" name="address" value="<?php echo $r['address'];?>">
                            <label for="city">City</label> 
                        </div>
                        <div class="input-field-add">
                                        
                             <input type="submit" class="submit" value="Update" name="update">
                        </div> 
                   </form>  
            </div>
        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>