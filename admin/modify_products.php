<?php
	include_once "../includes/db_config.php";
	$db = new Database();
	$conn = $db->getConnection();
	session_start();
	if(!isset($_SESSION['name']))
	{
		$msg = "Login First";
		header("Location:admin_login.php?msg=$msg");
	}
	if($_SESSION['entity'] != 200)
	{
		$msg = "Only for Admins";
		header("Location:admin_login.php?msg=$msg");
	}
?>



<!DOCTYPE html>
<html>
    <head>
        <title>Modify Products</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            td, th {
			    border: 1px solid #dddddd;
			    text-align: left;
			    padding: 8px;
}
        </style>
    </head>
<body>
        <form method = 'POST'>
            <select name='category'>
                <option value='' disabled selected>Select a Category</option>
                <option value = 'bread'>Bread</option>
                <option value = 'cake'>Cake</option>
                <option value = 'cookies'>Cookies</option>
                <option value = 'pastries'>Pastries</option>
            </select>
            <button type = 'submit' name='view_submit'>View Products</button>
            <button type = 'submit' name='add_submit'>Add a Product</button>
            <button type = 'submit' name='update_submit'>Update a Product</button>
            <button type = 'submit' name='delete_submit'>Delete a Product</button>
        </form>
    <?php
if(isset($_POST['add_submit']) && isset($_POST['category'])){
    $category = $_POST['category'];
        switch ($category){
            case 'bread':
            echo "<form method = 'POST' action = 'add_product.php'>"
                    . "<input type = 'text' placeholder = 'Enter Name of bread' name = 'name' required><br/>"
                    . "<input type = 'text' placeholder = 'Enter Shape' name = 'shape' required><br/>"
                    . "<input type = 'file' accept='image/png, image/jpeg' name = 'image' required><br/>"
                    . "<input type = 'text' placeholder = 'Enter Price' name = 'price' required><br/>"
                    . "<button type = 'submit' name = 'bread_submit'>Insert Product</button>"
                . "</form>";
            break;
            case 'cake':
            echo "<form method = 'POST' action = 'add_product.php'>"
                    . "<input type = 'text' placeholder = 'Enter Name of Cake' name = 'name' required><br/>"
                    . "<input type = 'text' placeholder = 'Enter Shape' name = 'shape' required><br/>"
                    . "<input type = 'file' accept='image/png, image/jpeg' name = 'image' required><br/>"
                    . "<input type = 'text' placeholder = 'Enter Price' name = 'price' required><br/>"
                    . "<span>Veg: </span><input type='radio' name='veg' value='Yes' checked> Yes&nbsp"
                    ."<input type='radio' name='veg' value='No'> No<br>"
                    . "<span>Sugar Free: </span><input type='radio' name='sugarFree' value='Yes' checked> Yes&nbsp"
                    . "<input type='radio' name='sugarFree' value='No'> No<br>"
                    . "<input type = 'text' name = 'ingredients' placeholder = 'Enter Ingredients' required><br/>"
                    . "Weight: <input type = 'number' name = 'weight' required>"
                    . "<button type = 'submit' name = 'cake_submit'>Insert Product</button>"
                . "</form>";
            break;
            case 'cookies':
            echo "<form method = 'POST' action='add_product.php'>"
                    . "<input type = 'text' placeholder = 'Enter Name of Cookie' name = 'name' required><br/>"
                    . "<input type = 'file' accept='image/png, image/jpeg' name = 'cookie_image' required><br/>"
                    . "<input type = 'text' placeholder = 'Enter Price' required name='price'><br/>"
                    . "<input type = 'text' name = 'ingredients' placeholder = 'Enter Ingredients' required><br/>"
                    . "Weight: <input type = 'number' name = 'weight' required>"
                    . "<button type = 'submit' name = 'cookie_submit'>Insert Product</button>"
                . "</form>";        
            break;
            case 'pastries':
            echo "<form method='POST' action ='add_product.php'>"
                    . "<input type = 'text' placeholder = 'Enter Name of Pastry' name = 'name' requireed><br/>"
                    . "<input type = 'file' accept='image/png, image/jpeg' name = 'pastry_image' required><br/>"
                    . "<input type = 'text' placeholder = 'Enter Price' name='price' required><br/>"
                    . "<span>Veg: </span><input type='radio' name='veg' value='Yes' checked> Yes&nbsp"
                    ."<input type='radio' name='veg' value='No'> No<br>"
                    . "<input type = 'text' name = 'ingredients' placeholder = 'Enter Ingredients' required><br/>"
                    . "<button type = 'submit' name = 'pastry_submit'>Insert Product</button>"
                . "</form>";            
            break;
            default:
                echo "Choose a valid category.";
    }
}
if(isset($_POST['view_submit']) && isset($_POST['category'])){
    $category = $_POST['category'];
        switch ($category){
            case 'bread':
                $bread_query = "SELECT * FROM bread";
                $res_bread = $conn->query($bread_query);
                if($res_bread->setFetchMode(PDO::FETCH_ASSOC))
			{
                     echo '<div>
                                    <table>
                                            <tr>                                                
                                                <th>Name</th> 
                                                <th>Shape</th>
                                                <th>Price</th>
                                            </tr>';
				while ($r = $res_bread->fetch()){
				$name = $r['name'];				
				$shape = $r['shape'];
                                $price = $r['price'];                               
                                            echo '<tr>                                               
                                               <td>'.$name.'</td> 
                                               <td>'.$shape.'</td>
                                               <td>'.$price.'</td>
                                            </tr>
                                            </table>
                                            </div>';
			}
		}
                break;
         case 'cake':
                $cake_query = "SELECT * FROM cake";
                $res = $conn->query($cake_query);
                if($res->setFetchMode(PDO::FETCH_ASSOC))
			{
                     echo '<div>
                                    <table>
                                            <tr>                                                
                                                <th>Name</th> 
                                                <th>Shape</th>
                                                <th>Price</th>
                                                <th>Weight</th>
                                                <th>Sugar Free</th>
                                                <th>Veg</th>
                                                <th>Ingredients</th>
                                            </tr>';
				while ($r = $res->fetch()){
				$name = $r['name'];				
				$shape = $r['shape'];
                                $price = $r['price'];
                                $weight = $r['weight'];
                                $sugarFree = $r['sugarFree'];
                                $veg = $r['veg'];
                                $ingredients = $r['ingredients'];
                                            echo '<tr>                                               
                                               <td>'.$name.'</td> 
                                               <td>'.$shape.'</td>
                                               <td>'.$price.'</td>
                                               <td>'.$weight.'</td>
                                               <td>'.$sugarFree.'</td>
                                               <td>'.$veg.'</td>
                                               <td>'.$ingredients.'</td><br>
                                            </tr>
                                            </table>
                                            </div>';
			}
		}
                break;
                case 'cookies':
                $cookie_query = "SELECT * FROM cookies";
                $res = $conn->query($cookie_query);
                if($res->setFetchMode(PDO::FETCH_ASSOC))
			{
                     echo '<div>
                                    <table>
                                            <tr>                                                
                                                <th>Name</th>                                                 
                                                <th>Price</th>
                                                <th>Weight</th>                                                
                                                <th>Ingredients</th>
                                            </tr>';
				while ($r = $res->fetch()){
				$name = $r['name'];								
                                $price = $r['price'];
                                $weight = $r['weight'];                                
                                $ingredients = $r['ingredients'];
                                            echo '<tr>                                               
                                               <td>'.$name.'</td>                                                
                                               <td>'.$price.'</td>
                                               <td>'.$weight.'</td>                                               
                                               <td>'.$ingredients.'</td><br>
                                            </tr>
                                            </table>
                                            </div>';
			}
		}
                break;
                case 'pastries':
                $pastry_query = "SELECT * FROM pastries";
                $res = $conn->query($pastry_query);
                if($res->setFetchMode(PDO::FETCH_ASSOC))
			{
                     echo '<div>
                                    <table>
                                            <tr>                                                
                                                <th>Name</th>                                                 
                                                <th>Price</th>                                                
                                                <th>Veg</th>
                                                <th>Ingredients</th>
                                            </tr>';
				while ($r = $res->fetch()){
				$name = $r['name'];								
                                $price = $r['price'];                                
                                $veg = $r['veg'];
                                $ingredients = $r['ingredients'];
                                            echo '<tr>                                               
                                               <td>'.$name.'</td>                                                
                                               <td>'.$price.'</td>                                               
                                               <td>'.$veg.'</td>
                                               <td>'.$ingredients.'</td><br>
                                            </tr>
                                            </table>
                                            </div>';
			}
		}
                break;
                default:
                echo "Choose a valid category.";
        }
}
if(isset($_POST['delete_submit']) && isset($_POST['category'])){
    $category = $_POST['category'];
        switch ($category){
            case 'bread':
                $query = "SELECT * FROM bread";
                $res = $conn->query($query);
                if($res->setFetchMode(PDO::FETCH_ASSOC))
			{
                    echo "<label for=product_Id>Please Select a Product: </label>";
                    echo "<form method='POST' action = 'delete_product.php'>";
                    echo "<select id=product_Id name='product_Id'>";
                    while ($r = $res->fetch()){
                        echo "<option value='" . $r['product_Id'] ."'>".$r['name']."</option>";
                        }
                        echo "</select>";
                    echo "<input type='submit' id='s1' name='delete_bread' value='Delete'><br>";
                    
                    "</form>";
                        }
                        break;
                        case 'cake':
                $query = "SELECT * FROM cake";
                $res = $conn->query($query);
                if($res->setFetchMode(PDO::FETCH_ASSOC))
			{
                    echo "<label for=product_Id>Please Select a Product: </label>";
                    echo "<form method='POST' action = 'delete_product.php'>";
                    echo "<select id=product_Id name='product_Id'>";
                    while ($r = $res->fetch()){
                        echo "<option value='" . $r['product_Id'] ."'>" . $r['name'] ."</option>";
                        }
                        echo "</select>";
                    echo "<input type='submit' id='s1' name='delete_cake' value='Delete'><br>";
                    "</form>";
                        }
                        break;
                        case 'cookies':
                $query = "SELECT * FROM cookies";
                $res = $conn->query($query);
                if($res->setFetchMode(PDO::FETCH_ASSOC))
			{
                    echo "<label for=product_Id>Please Select a Product: </label>";
                    echo "<form method='POST' action = 'delete_product.php'>";
                    echo "<select id=product_Id name='product_Id'>";
                    while ($r = $res->fetch()){
                        echo "<option value='" . $r['product_Id'] ."'>" . $r['name'] ."</option>";
                        }
                        echo "</select>";
                    echo "<input type='submit' id='s1' name='delete_cookies' value='Delete'><br>";
                    "</form>";
                        }
                        break;
                        case 'pastries':
                $query = "SELECT * FROM pastries";
                $res = $conn->query($query);
                if($res->setFetchMode(PDO::FETCH_ASSOC))
			{
                    echo "<label for=product_Id>Please Select a Product: </label>";
                    echo "<form method='POST' action = 'delete_product.php'>";
                    echo "<select id=product_Id name='product_Id'>";
                    while ($r = $res->fetch()){
                        echo "<option value='" . $r['product_Id'] ."'>" . $r['name'] ."</option>";
                        }
                        echo "</select>";
                    echo "<input type='submit' id='s1' name='delete_pastry' value='Delete'><br>";
                    "</form>";
                        }
                        break;
        }
}
?>
    <span style="color:red;">
 <?php if(isset($_GET['msg']))
  echo $_GET['msg'];
 ?></span>
</body>
</html>