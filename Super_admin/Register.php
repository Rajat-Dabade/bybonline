<?php 

include_once '../includes/db_config.php';
		$db = new Database();
		$conn = $db->getConnection();
                session_start();

                if(isset($_SESSION['sadminname']))
                {
                    header("Location:modify_products.php");
                }

?>
<!DOCTYPE html>
<html>
    <head>
        <title>SignUp for a new Admin Account</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="index.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
                <div class="signup_form container">
                    <div class="col-lg-4 col-lg-offset-4">
                    <h1>SIGN UP</h1>
                    <form method="POST" action="sadminRegister_script.php">
                        <input type="text" name="name" placeholder="Name" class="form-control form-group" required="true">
                        <input type="email" name="email" placeholder="E-Mail" class="form-control form-group" required="true">
                        <input name="mobile" placeholder="Mobile" class="form-control form-group" required="true" pattern="[789][0-9]{9}">
                        <input type="password" name="password" placeholder="Password" class="form-control form-group" required="true">
                        <span style="color:red;">
 <?php if(isset($_GET["signup_msg"]))
  echo $_GET["signup_msg"];
  echo "<br/>";
 ?></span>
                        <p>Already a user? <a href="super_login.php">Login</a></p>
                        <input type="submit" value="Submit" class="btn btn-primary form-control form-group">  
                    </form>
                    </div>
                </div>
    </body>
    </html>