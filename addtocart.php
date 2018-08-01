<?php

	include_once 'includes/db_config.php';

	session_start();
	if(!isset($_SESSION['name']))
	{
		echo "<script type='text/javascript'>
     window.location.href='login.php'</script>";
     die();
	}

	$value = $_GET['value'];
	$productId = $_GET['productId'];
	$price = $_GET['price'];

	$userId = $_SESSION['id'];

	$db = new Database();
	$conn = $db->getConnection();

	$query = "SELECT category_id FROM category where category_name = '$value'";
	$q = $conn->query($query);
	if($q->setFetchMode(PDO::FETCH_ASSOC))
	{
		while ($r = $q->fetch()){
			$categoryId = $r['category_id'];
		}
	}

	$purchaseId = rand(10,100);

	$query = "INSERT INTO orderd_item values('', '$userId','$purchaseId', '$categoryId', '$productId', '1', '$price')";
	$q = $conn->query($query);

	echo '<script language="javascript">';
	echo 'alert("The item is added to the cart")';
	echo '</script>';
	echo "<script type='text/javascript'>
     window.location.href='cart.php'</script>";



?>