<?php 
	
	session_start();
	if(!isset($_SESSION['sadminname']) && $_SESSION['sadminentity'] != 300)
	{
		$msg = "Only for Super Admins";
        header("Location:super_login.php?msg=$msg");
        die();
	}


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>



<?php

	include_once '../includes/db_config.php';

	$db = new Database();
	$conn = $db->getConnection();

	$productId = $_POST['productId'];

	if($productId != 0 && isset($_POST['cake_modify']))
	{
		$query = "SELECT * from cake where product_Id = '$productId'";
		$q = $conn->query($query);

		if($q->setFetchMode(PDO::FETCH_ASSOC))
			{
				while ($r = $q->fetch()){
					$productId = $r['product_Id'];
					$name = $r['name'];
					$image = $r['image'];
					$weight = $r['weight'];
					$price = $r['price'];
					$shape = $r['shape'];
					$sugarFree = lcfirst($r['sugarFree']);
					$veg = lcfirst($r['veg']);
					$ingredients = $r['ingredients'];

					?>
					<div class="col-md-4 panel panel-default">
						<div class="panel-body">
							<h2>Modify Cake</h2>
							<form class="form-group" action="update_script.php" method="post">
								ProductID : <input class="form-control" type="text" name="productId" value="<?php echo $productId;?>" readonly><br>
								Name : <input class="form-control" type="text" name="name" value="<?php echo $name; ?>" required><br>
								Weight : <input class="form-control" type="text" name="weight" value="<?php echo $weight; ?>" required><br>
								Price : <input class="form-control" type="text" name="price" value="<?php echo $price; ?>" required><br>
								Shape : <input class="form-control" type="text" name="shape" value="<?php echo $shape; ?>" required><br>
								SugarFree : <input class="form-control" type="text" name="sugarFree" value="<?php echo $sugarFree; ?>" required><br>
								Veg : <input class="form-control" type="text" name="veg" value="<?php echo $veg; ?>" required><br>
								Ingredients : <input class="form-control" type="text" name="ingredients" value="<?php echo $ingredients; ?>" required><br>
								<input type="submit" class="btn btn-success" name="productModify" value="cakeModify">
							</form>
						</div>
					</div>

					<?php
				}
			}
	}
	elseif ($productId != 0 && isset($_POST['bread_modify'])) {
		
		$query = "SELECT * from bread where product_Id = '$productId'";
		$q = $conn->query($query);

		if($q->setFetchMode(PDO::FETCH_ASSOC))
			{
				while ($r = $q->fetch()){
					$productId = $r['product_Id'];
					$name = $r['name'];
					$price = $r['price'];
					$shape = $r['shape'];

					?>
					<div class="col-md-4 panel panel-default">
						<div class="panel-body">
							<h2>Modify Bread</h2>
							<form class="form-group" action="update_script.php" method="post">
								ProductID : <input class="form-control" type="text" name="productId" value="<?php echo $productId;?>" readonly><br>
								Name : <input class="form-control" type="text" name="name" value="<?php echo $name; ?>" required><br>
								Price : <input class="form-control" type="text" name="price" value="<?php echo $price; ?>" required><br>
								Shape : <input class="form-control" type="text" name="shape" value="<?php echo $shape; ?>" required><br>
								<input type="submit" class="btn btn-success" name="productModify" value="breadModify">
							</form>
						</div>
					</div>

					<?php
				}
			}

	}

	elseif ($productId != 0 && isset($_POST['cookie_modify'])) {
		
		$query = "SELECT * from cookies where product_Id = '$productId'";
		$q = $conn->query($query);

		if($q->setFetchMode(PDO::FETCH_ASSOC))
			{
				while ($r = $q->fetch()){
					$productId = $r['product_Id'];
					$name = $r['name'];
					$price = $r['price'];
					$ingredients = $r['ingredients'];

					?>
					<div class="col-md-4 panel panel-default">
						<div class="panel-body">
							<h2>Modify Cookie</h2>
							<form class="form-group" action="update_script.php" method="post">
								ProductID : <input class="form-control" type="text" name="productId" value="<?php echo $productId;?>" readonly><br>
								Name : <input class="form-control" type="text" name="name" value="<?php echo $name; ?>" required><br>
								Price : <input class="form-control" type="text" name="price" value="<?php echo $price; ?>" required><br>
								Ingredients : <input class="form-control" type="text" name="ingredients" value="<?php echo $ingredients; ?>" required><br>
								<input type="submit" class="btn btn-success" name="productModify" value="cookieModify">
							</form>
						</div>
					</div>

					<?php
				}
			}

	}

	elseif ($productId != 0 && isset($_POST['pastry_modify'])) {
		
		$query = "SELECT * from pastries where product_Id = '$productId'";
		$q = $conn->query($query);

		if($q->setFetchMode(PDO::FETCH_ASSOC))
			{
				while ($r = $q->fetch()){
					$productId = $r['product_Id'];
					$name = $r['name'];
					$price = $r['price'];
					$veg = lcfirst($r['veg']);
					$ingredients = $r['ingredients'];

					?>
					<div class="col-md-4 panel panel-default">
						<div class="panel-body">
							<h2>Modify Pastry</h2>
							<form class="form-group" action="update_script.php" method="post">
								ProductID : <input class="form-control" type="text" name="productId" value="<?php echo $productId;?>" readonly><br>
								Name : <input class="form-control" type="text" name="name" value="<?php echo $name; ?>" required><br>
								Price : <input class="form-control" type="text" name="price" value="<?php echo $price; ?>" required><br>
								Veg : <input class="form-control" type="text" name="veg" value="<?php echo $veg; ?>" required><br>
								Ingredients : <input class="form-control" type="text" name="ingredients" value="<?php echo $ingredients; ?>" required><br>
								<input type="submit" class="btn btn-success" name="productModify" value="pastryModify">
							</form>
						</div>
					</div>

					<?php
				}
			}

	}

	?>

	</body>
</html>