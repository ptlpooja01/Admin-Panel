<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
  <div class="wrapper">
    <div class="container main">
        <div class="row">
            <div class="col-md-6 side-image">  

            </div>

            <div class="col-md-6 right">
                
                <div class="input-box">
                   
                   <header><h3> Sign In</h3> </header>
                   <form action="signincheck.php" method="post">
                        <div class="input-field">
                                <input type="text" class="input" id="email" autocomplete="off" name="email" required>
                                <label for="email">Email</label> 
                            </div> 
                        <div class="input-field">
                                <input type="password" class="input" id="pass"  name="password" required>
                                <label for="pass">Password</label>
                        </div> 
                        <!--<div class="input-field">
                                <div>
                                
                                <select class="selected-type" id="type" name="type" required>
                                        <option value="Admin" selected>-Selected-</option>
                                        <option value="Admin">Admin</option>
                                        <option value="User">User</option>
                                    </select>
                                    <label for="type">Type</label>
                                </div>
                        </div>--> <br>
                        <div class="input-field">
                                
                                <input type="submit" class="submit" value="Sign In" name="submit">
                        </div> 
                   </form>
                </div>  
            </div>
        </div>
    </div>
</div>
</body>
</html>