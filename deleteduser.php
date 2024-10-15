<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<table class="table table-striped">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="viewbody-deleted">
<div class="container">
  <h2 >Users List</h2> 
  <?php
  $Conn = new PDO("mysql:host=localhost;dbname=task1","root","");
  $query = "select * from users where status=0";
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
                    echo "</tr>";
                }
  echo "</table>";
  
    ?>
</div>
<div>
  <button class="button" name="submit" type="submit" value="submit"><a href="dashboard.php">Back</a></button>
</div>
</body>
</html>