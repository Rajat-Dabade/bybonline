<?php

	session_start();

	if(!isset($_SESSION['name']))
	{
		session_destroy();
		echo "<script type='text/javascript'>
     window.location.href='login.php'</script>";
	}

	if(!isset($_POST['purchaseId']) && !isset($_POST['address']) && !isset($_POST['pin_code']) && !isset($_POST['mobile_number']) && !isset($_POST['cake_message']))
	{
		echo "<script type='text/javascript'>
     window.location.href='cart.php'</script>";	
	}

	$purchaseId = $_POST['purchaseId'];
	$address = $_POST['address'];
	$pinCode = $_POST['pin_code'];
	$mobileNumber = $_POST['mobile_number'];
	$cakeMessage = $_POST['cake_message'];

	$userId = $_SESSION['id'];
	$name = $_SESSION['name'];

	$dt = new DateTime();
	$time = $dt->format('Y-m-d H:i:s');

	include_once 'includes/db_config.php';

	$db = new Database();
	$conn = $db->getConnection();

	$query = "INSERT INTO orders values('$purchaseId', '$userId', '$time', '$name', '$address', '$pinCode', '$mobileNumber', '$cakeMessage', ' ')";

	$q = $conn->query($query);

	if($q)
	{
		$query = "DELETE from orderd_item where purchase_id = '$purchaseId'";
		$q  = $conn->query($query);
		if($q)
		{
			echo '<script language="javascript">';
			echo 'alert("Ordered place successfull")';
			echo '</script>';
			echo "<script type='text/javascript'>
		     window.location.href='cart.php'</script>";
		}
		else
		{
			echo '<script language="javascript">';
			echo 'alert("Something went wrong")';
			echo '</script>';
			echo "<script type='text/javascript'>
		     window.location.href='cart.php'</script>";	
		}
	}
	else{
			echo '<script language="javascript">';
			echo 'alert("Something went wrong")';
			echo '</script>';
			echo "<script type='text/javascript'>
		     window.location.href='cart.php'</script>";
	}
