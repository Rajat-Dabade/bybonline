<?php 
	include_once "../includes/db_config.php";
	session_start();
	if(!isset($_SESSION['sadminname']) && $_SESSION['sadminentity'] != 300)
	{
		$msg = "Only for Super Admins";
        header("Location:super_login.php?msg=$msg");
        die();
	}

	$db = new Database();
	$conn = $db->getConnection();
?><html>
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
        <br><br><br>
        <div class="signup_form container">
                    <div class="col-lg-4 col-lg-offset-4">
<form method="POST">
    <h4>Address :</h4>
    <input type="text" name="address" placeholder="Enter New Address" class="form-control form-group" required="true">
    <input type="submit" value="Submit" class="btn btn-primary" ><br/>
</form>
                        <form method="POST">
    <h4>Mobile Number : </h4>
    <input name="contact" placeholder="Enter new contact" class="form-control form-group" required="true" pattern="[789][0-9]{9}">
    <input type="submit" value="Submit" class="btn btn-primary"><br/>
                        </form>
                        <form method="POST">
    <h4>About us : </h4>
    <textarea name="about_us" form="usrform" rows="4" cols="50" class="form-control form-group" required="true" placeholder="Enter about us here"></textarea>
    <input type="submit" value="Submit" class="btn btn-primary" ><br/>
</form>
                    </div>
        </div>
        </body>
    </html>
    <?php
    if(isset($_POST['address'])){
        $address = $_POST['address'];
       $query = "UPDATE company_details SET address = '$address'";
       $query_result=$conn->query($query);
    }
    if(isset($_POST['contact'])){
        $contact = $_POST['contact'];
        $query = "UPDATE company_details SET contact = '$contact'";
        $query_result=$conn->query($query);
    }
    if(isset($_POST['about_us'])){
        $about_us = $_POST['about_us'];
        $query = "UPDATE company_details SET about_us = '$about_us'";
        $query_result=$conn->query($query);
    }
    ?>