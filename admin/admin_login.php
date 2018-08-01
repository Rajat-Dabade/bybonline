<?php 
include_once '../includes/db_config.php';
$db = new Database();
$conn = $db->getConnection();
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login to Admin Account</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="index.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div id="login_panel" class="container">
            <div class="col-lg-4 col-lg-offset-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                    LOGIN
                    </div>
                        <div class="panel-body">
                        <p class="text-warning">Login to make a purchase</p>
                        <form method="post" action="adminLogin_script.php">
                        <input type="email" name="email" placeholder="Enter your E-mail Id" class="form-control form-group" required>
                        <input type="password" name="password" placeholder="Enter Password" class="form-control form-group" required>
                        <span style="color:red;">
							 <?php if(isset($_GET['msg']))
							  echo $_GET['msg'];
							 ?></span>
                        <button type="submit" value="Submit" class="btn btn-primary">Login</button>
                        </form>
                        </div>
                    <div class="panel-footer">
                        Don't have an Account? <a href="admin_register.php">Register Here</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
