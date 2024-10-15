<?php

include "connection.php";
if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $contactno=$_POST['contactno'];
    $address=$_POST['address'];
    $query = "insert into users values(NULL,'$fname','$lname','$email','$contactno','$address',1)";
    $stat = $conn->prepare($query);
if($stat == TRUE)
{
    $stat->execute();
    echo "Data Inserted Successfully";
}
else{
    echo "Error"."<br>".$conn->error;
}
$conn->close(); 
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Add Users</title>
</head>
<body class="addbody">
    <div class="containerusers">
    <div class="addrow">
                <div class="input-box-add">
                   <h1>Add Users </h1>
                   <form action="" method="post">
                        <div class="input-field-add">
                            <input type="text" class="input-add" id="fname" autocomplete="off" name="fname" required>
                            <label for="fname">First Name</label> 
                        </div>
                        <div class="input-field-add">
                            <input type="text" class="input-add" id="lname" autocomplete="off" name="lname" required>
                            <label for="lname">Last Name</label> 
                        </div>
                        <div class="input-field-add">
                            <input type="text" class="input-add" id="email" autocomplete="off" name="email" required>
                            <label for="email">Email</label> 
                        </div> 
                        <div class="input-field-add">
                            <input type="text" class="input-add" id="pass"  name="contactno" maxlength="10" required>
                            <label for="pass">Contact Number</label>
                        </div> 
                        <div class="input-field-add">
                            <input type="text" class="input-add" id="name" autocomplete="off" name="address" required>
                            <label for="city">City</label> 
                        </div>
                        <div class="input-field-add">
                                        
                             <input type="submit" class="submit" value="Add Users" name="submit">
                        </div> 
                   </form>  
                   <div class="d-flex justify-content-center mt-3 submit_container">
                        <button class="btn submit_btn-back" name="viewdata" onclick="BackFunction()">  Back  </button>
                            <script>
                                function BackFunction() {
                                window.location.href = 'dashboard.php';
                                }
                    </script>
        </div>
            </div>
        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>