<?php      
    include 'connection.php' ;  
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
      $email=$_POST['email'];
      $password=$_POST['password'];

      if(!empty($email) && !empty($password) && !is_numeric($email))
      {
        $query = "select * form login where email='$email' limit 1";
        $result = mysqli_query($conn,$query);
        if($result)
        {
          if($result && mysqli_num_rows($result) > 0)
          {
            $user_data = mysqli_fetch_assoc($result);
            if($user_data['password']==$password AND $user_data['email']==$email)
            {
              header("Location:view.php");
            }
          }
        }
        header("Location:index.php");
      }
      else{
        echo "<script type='text/javascript'>alert('YOU ARE NOT ADMIN')</script>";
      }
    }
?>  
