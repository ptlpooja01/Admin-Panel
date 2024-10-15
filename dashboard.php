<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dash Board</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <div >
            <h1 class="heading">Dash Board</h1>
        </div>
        <div>
            <div class="d-flex justify-content-center mt-3 submit_container">
                <button class="btn submit_btn" name="viewdata" onclick="AddFunction()">Add Users</button>
                    <script>
                        function AddFunction() {
                        window.location.href = 'adduser.php';
                        }
                    </script>
        </div>
    </div>
    <div>
        <div class="d-flex justify-content-center mt-3 submit_container">
                <button class="btn submit_btn" name="viewdata" onclick="ViewFunction()">View Users List</button>
                    <script>
                        function ViewFunction() {
                        window.location.href = 'view.php';
                        }
                    </script>
        </div>
    </div>
  
    <div>
    <div class="d-flex justify-content-center mt-3 submit_container">
                <button class="btn submit_btn" name="viewdata" onclick="DeleteFunction()">Deleted Users List</button>
                    <script>
                        function DeleteFunction() {
                        window.location.href = 'deleteduser.php';
                        }
                    </script>
        </div>
    </div>
</body>
</html>