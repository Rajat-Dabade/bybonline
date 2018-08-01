<?php 
	
	session_start();
	if(!isset($_SESSION['adminname']) && $_SESSION['adminentity'] != 200)
	{
		$msg = "Only for Admins";
        header("Location:admin_login.php?msg=$msg");
        die();
	}
	
	if(!isset($_POST['productModify']))
	{
		header("Location:modify_products.php");
	}

	include_once '../includes/db_config.php';

	$db = new Database();
	$conn = $db->getConnection();


	switch ($_POST['productModify']) {
		case 'cakeModify':
				
				$productId = $_POST['productId'];
				$name = $_POST['name'];
				$weight = $_POST['weight'];
				$price = $_POST['price'];
				$shape = $_POST['shape'];
				$sugarFree = lcfirst($_POST['sugarFree']);
				$veg = lcfirst($_POST['veg']);
				$ingredients = $_POST['ingredients'];

				$query = "UPDATE cake set name = '$name', weight = '$weight', price = '$price', shape = '$shape', sugarFree = '$sugarFree', veg = '$veg', ingredients = '$ingredients' where product_Id = '$productId'";

				$conn->query($query);

				echo "Modify the product";


			break;
		
		case 'breadModify' : 

				$productId = $_POST['productId'];
				$name = $_POST['name'];
				$price = $_POST['price'];
				$shape = $_POST['shape'];

				$query = "UPDATE bread set name = '$name', price = '$price', shape = '$shape' where product_Id = '$productId'";

				$conn->query($query);

				echo "Modify the product bread";

			break;

		case 'cookieModify':
				
				$productId = $_POST['productId'];
				$name = $_POST['name'];
				$price = $_POST['price'];
				$ingredients = $_POST['ingredients'];

				$query = "UPDATE cookies set name = '$name', price = '$price', ingredients = '$ingredients' where product_Id = '$productId'";

				$conn->query($query);

				echo "Modify the product cookies";


			break;

		case 'pastryModify':
				
				$productId = $_POST['productId'];
				$name = $_POST['name'];
				$price = $_POST['price'];				
				$veg = lcfirst($_POST['veg']);
				$ingredients = $_POST['ingredients'];

				$query = "UPDATE pastries set name = '$name', price = '$price', veg = '$veg', ingredients = '$ingredients' where product_Id = '$productId'";

				$conn->query($query);

				echo "Modify the product pastry";


			break;
		
	}

