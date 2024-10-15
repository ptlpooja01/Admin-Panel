<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<table class="table table-striped">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="viewbody">
<div class="container">
  <h2 >Users List</h2> 
  <?php
  $Conn = new PDO("mysql:host=localhost;dbname=task1","root","");
  $query = "select * from users where status=1";
  $stat=$Conn->prepare($query);
  $stat->execute();
  $result = $stat->fetchAll();
  $Conn=null;
  $count =0;
  echo "<table class='table table-striped'>";
  echo "<thead>";
  echo "<tr>";
    echo "<th>Sr NO# </th>";
    echo "<th>First Name</th>";
    echo "<th>Last Name</th>";
    echo "<th>Email</th>";
    echo "<th>Contact No</th>";
    echo "<th>City</th>";
    echo "<th>Edit</th>";
    echo "<th>Delete</th>";
  echo "</tr>";
  echo "</thead>";
  foreach($result as $r)
                {
                    echo "<tr>";
                        echo "<td>".++$count."</td>";
                        echo "<td>".$r['fname']."</td>";
                        echo "<td>".$r['lname']."</td>";
                        echo "<td>".$r['email']."</td>";
                        echo "<td>".$r['contactno']."</td>";
                        echo "<td>".$r['address']."</td>";
                        echo "<td><a href=edit.php?id=$r[uid]>Update</a></td>";
                        echo "<td><a href=delete.php?id=$r[uid]>Delete</a></td>";
                    echo "</tr>";
                }
  echo "</table>";
  
    ?>
</div>
<div>
<div class="d-flex justify-content-center mt-3 submit_container">
                <button class="submit_btn-back" name="viewdata" onclick="DeleteFunction()">Back</button>
                    <script>
                        function DeleteFunction() {
                        window.location.href = 'dashboard.php';
                        }
                    </script>
        </div>
</div>
</body>
</html>