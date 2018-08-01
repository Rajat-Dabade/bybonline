<?php
    
    session_start();

    if(!isset($_SESSION['adminname']))
    {
        $msg = "Login First";
        header("Location:admin_login.php?msg=$msg");
    }
    if($_SESSION['adminentity'] != 200)
    {
        $msg = "Only for Admins";
        session_destroy();
        header("Location:admin_login.php?msg=$msg");
    }

	include_once "../includes/db_config.php";
	$db = new Database();
	$conn = $db->getConnection();
	
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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
<body>
    <br>
        <div class="col-md-10">
        <form method = 'POST'>
            <div class="form-inline">
            <select class="form-control" name='category'>
                <option value='' disabled selected>Select a Category</option>
                <option value = 'bread'>Bread</option>
                <option value = 'cake'>Cake</option>
                <option value = 'cookies'>Cookies</option>
                <option value = 'pastries'>Pastries</option>
            </select>
            <button class="form-control" type = 'submit' name='view_submit'>View Products</button>
            <button class="form-control" type = 'submit' name='add_submit'>Add a Product</button>
            <button class="form-control" type = 'submit' name='update_submit'>Update a Product</button>
            <button class="form-control" type = 'submit' name='delete_submit'>Delete a Product</button>
            </div>
        </form>
        </div>
        <div class="col-md-1">
            <button class="btn btn-info"><?php echo $_SESSION['adminname']; ?></button>
        </div>
        <div class="col-md-1">
            <a href="logout.php"><button class="btn btn-primary">Logout</button></a>
        </div>
        <br><br>
    <?php
if(isset($_POST['add_submit']) && isset($_POST['category'])){
    $category = $_POST['category'];
        switch ($category){
            case 'bread':
            echo "<div class='col-md-4'>"
                    . "<h2>Add Bread</h2>"
                    ."<form method = 'POST' action = 'add_product.php' enctype='multipart/form-data'>"
                    . "<div class='form-group'>"
                    . "Name : <input class='form-control' type = 'text' placeholder = 'Enter Name of bread' name = 'name' required><br/>"
                    . "Shape : <input class='form-control' type = 'text' placeholder = 'Enter Shape' name = 'shape' required><br/>"                    
                    . "Image : <input class='form-control' type = 'file' accept='image/png, image/jpeg' name = 'image' id='image' required><br/>"
                    . "Price : <input class='form-control' type = 'text' placeholder = 'Enter Price' name = 'price' required><br/>"
                    . "<button class='btn btn-success' type = 'submit' name = 'bread_submit'>Insert Product</button>"
                    ."</div>"
                . "</form>"
                . "</div>";
            break;
            case 'cake':
            echo "<div class='col-md-4'>"
                    . "<h2>Add Cake</h2>"
                    ."<form method = 'POST' action = 'add_product.php' enctype='multipart/form-data'>"
                    . "<div class='form-group'>"
                    . "Name : <input class='form-control' type = 'text' placeholder = 'Enter Name of Cake' name = 'name' required><br/>"
                    . "Shape : <input class='form-control' type = 'text' placeholder = 'Enter Shape' name = 'shape' required><br/>"
                    . "Image : <input class='form-control' type = 'file' accept='image/png, image/jpeg' name = 'image' id='image' required><br/>"
                    . "Price : <input class='form-control' type = 'text' placeholder = 'Enter Price' name = 'price' required><br/>"
                    . "<span>Veg: </span><input type='radio' name='veg' value='Yes' checked> Yes&nbsp"
                    ."<input type='radio' name='veg' value='No'> No<br>"
                    . "<span>Sugar Free: </span><input type='radio' name='sugarFree' value='Yes' checked> Yes&nbsp"
                    . "<input type='radio' name='sugarFree' value='No'> No<br><br>"
                    . "Ingredients : <input class='form-control' type = 'text' name = 'ingredients' placeholder = 'Enter Ingredients' required><br/>"
                    . "Weight: <input class='form-control' type = 'number' name = 'weight' required><br>"
                    . "<button class='btn btn-success' type = 'submit' name = 'cake_submit'>Insert Product</button>"
                    . "</div>"
                    . "</form>"
                    . "</div>";
            break;
            case 'cookies':
            echo "<div class='col-md-4'>"
                    . "<h2>Add Cookie</h2>"
                    ."<form method = 'POST' action='add_product.php' enctype='multipart/form-data'>"
                    . "<div class='form-group'>"
                    . "Name : <input class='form-control' type = 'text' placeholder = 'Enter Name of Cookie' name = 'name' required><br/>"
                    . "Image : <input class='form-control' type = 'file' accept='image/png, image/jpeg' name = 'image' id='image' required><br/>"
                    . "Price : <input class='form-control' type = 'text' placeholder = 'Enter Price' required name='price'><br/>"
                    . "Ingredients : <input class='form-control' type = 'text' name = 'ingredients' placeholder = 'Enter Ingredients' required><br/>"
                    . "Weight: <input class='form-control' type = 'number' name = 'weight' required><br>"
                    . "<button class='btn btn-success' type = 'submit' name = 'cookie_submit'>Insert Product</button>"
                    . "</div>"
                    . "</form>"
                    . "</div>";        
            break;
            case 'pastries':
            echo  "<div class='col-md-4'>"
                    . "<h2>Add Pastries</h2>"
                    ."<form method='POST' action ='add_product.php' enctype='multipart/form-data'>"
                    . "<div class='form-group'>"
                    . "Name : <input class='form-control' type = 'text' placeholder = 'Enter Name of Pastry' name = 'name' requireed><br/>"
                    . "Image : <input class='form-control' type = 'file' accept='image/png, image/jpeg' name = 'image' id='image' required><br/>"
                    . "Price : <input class='form-control' type = 'text' placeholder = 'Enter Price' name='price' required><br/>"
                    . "<span>Veg: </span><input type='radio' name='veg' value='Yes' checked> Yes&nbsp"
                    ."<input type='radio' name='veg' value='No'> No<br><br>"
                    . "Ingredients : <input class='form-control' type = 'text' name = 'ingredients' placeholder = 'Enter Ingredients' required><br/><br>"
                    . "<button class='btn btn-success' type = 'submit' name = 'pastry_submit'>Insert Product</button>"
                    . "</div>"
                . "</form>"
                . "</div>";            
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
                    echo '<div class="col-md-6"><table class="table table-striped">
                            <tr>
                                <th>productId</th>                                                
                                <th>Name</th> 
                                <th>Shape</th>
                                <th>Price</th>
                            </tr>';
    				while ($r = $res_bread->fetch()){				                            
                                                echo '
                                                    <tr>
                                                    <td>'.$r['product_Id'].'</td>                                               
                                                   <td>'.$r['name'].'</td> 
                                                   <td>'.$r['shape'].'</td>
                                                   <td>'.$r['price'].'</td><br/>
                                                </tr>';
    			     }
                     echo '</table></div>';                        
		        }
                break;
         case 'cake':
                $cake_query = "SELECT * FROM cake";
                $res = $conn->query($cake_query);
                if($res->setFetchMode(PDO::FETCH_ASSOC))
			{                    
                echo '<div class="col-md-6"><table class="table table-striped">
                                            <tr> 
                                                <th>ProductId</th>                                               
                                                <th>Name</th> 
                                                <th>Shape</th>
                                                <th>Price</th>
                                                <th>Weight</th>
                                                <th>Sugar Free</th>
                                                <th>Veg</th>
                                                <th>Ingredients</th>
                                            </tr>';
				while ($r = $res->fetch()){				                                
                                            echo '
                                                <tr>
                                                <td>'.$r['product_Id'].'</td>                                                
                                               <td>'.$r['name'].'</td> 
                                               <td>'.$r['shape'].'</td>
                                               <td>'.$r['price'].'</td>
                                               <td>'.$r['weight'].'</td>
                                               <td>'.$r['sugarFree'].'</td>
                                               <td>'.$r['veg'].'</td>
                                               <td>'.$r['ingredients'].'</td><br>
                                            </tr>
                                            ';
			}
            echo '</table></div>';
		}
                break;
                case 'cookies':
                $cookie_query = "SELECT * FROM cookies";
                $res = $conn->query($cookie_query);
                if($res->setFetchMode(PDO::FETCH_ASSOC))
			{                                     
                echo '<div class="col-md-6"><table class="table table-striped">
                                            <tr>
                                                <th>ProductId</th>                             
                                                <th>Name</th>                                                 
                                                <th>Price</th>
                                                <th>Weight</th>                                                
                                                <th>Ingredients</th>
                                            </tr>';                 
				while ($r = $res->fetch()){				
                                            echo '
                                                <tr>
                                                <td>'.$r['product_Id'].'</td>
                                               <td>'.$r['name'].'</td>                                                
                                               <td>'.$r['price'].'</td>
                                               <td>'.$r['weight'].'</td>                                               
                                               <td>'.$r['ingredients'].'</td><br>
                                            </tr>'
                                            ;
			}
            echo '</table></div>';
		}
                break;
                case 'pastries':
                $pastry_query = "SELECT * FROM pastries";
                $res = $conn->query($pastry_query);
                if($res->setFetchMode(PDO::FETCH_ASSOC))
			{                   
                echo '<div class="col-md-6"><table class="table table-striped">
                                            <tr>
                                                <th>ProductId</th>                            
                                                <th>Name</th>                                                 
                                                <th>Price</th>                                                
                                                <th>Veg</th>
                                                <th>Ingredients</th>
                                            </tr>';
				while ($r = $res->fetch()){				
                                            echo '
                                                <tr>
                                                <td>'.$r['product_Id'].'</td>                                               
                                               <td>'.$r['name'].'</td>
                                               <td>'.$r['price'].'</td>                                               
                                               <td>'.$r['veg'].'</td>
                                               <td>'.$r['ingredients'].'</td><br>
                                            </tr>';
			}
            echo '</table></div>';
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
                    echo "<br><div class='col-md-4'><label for=product_Id>Please Select a Product: </label>";
                    echo "<form method='POST' class='form-group' action = 'delete_product.php'>";
                    echo "<select class='form-control' id=product_Id name='product_Id'>";
                    while ($r = $res->fetch()){
                        echo "<option value='" . $r['product_Id'] ."'>".$r['name']."</option>";
                        }
                        echo "</select>";                      
                    echo "<br><input type='submit' class='btn btn-danger' id='s1' name='delete_bread' value='Delete'><br>";
                    
                    "</form>";
                        }
                        break;
                        case 'cake':
                $query = "SELECT * FROM cake";
                $res = $conn->query($query);
                if($res->setFetchMode(PDO::FETCH_ASSOC))
			{
                    echo "<br><div class='col-md-4'><label for=product_Id>Please Select a Product: </label>";
                    echo "<form method='POST' class='form-group' action = 'delete_product.php'>";
                    echo "<select id=product_Id name='product_Id' class='form-control'>";
                    while ($r = $res->fetch()){
                        echo "<option value='" . $r['product_Id'] ."'>" . $r['name'] ."</option>";
                        }
                        echo "</select>";
                    echo "<br><input type='submit' class='btn btn-danger' id='s1' name='delete_cake' value='Delete'><br>";
                    "</form>";
                        }
                        break;
                        case 'cookies':
                $query = "SELECT * FROM cookies";
                $res = $conn->query($query);
                if($res->setFetchMode(PDO::FETCH_ASSOC))
			{
                    echo "<br><div class='col-md-4'><label for=product_Id>Please Select a Product: </label>";
                    echo "<form method='POST' class='form-group' action = 'delete_product.php'>";
                    echo "<select id=product_Id class='form-control' name='product_Id'>";
                    while ($r = $res->fetch()){
                        echo "<option value='" . $r['product_Id'] ."'>" . $r['name'] ."</option>";
                        }
                        echo "</select>";
                    echo "<br><input type='submit' class='btn btn-danger' id='s1' name='delete_cookies' value='Delete'><br>";
                    "</form>";
                        }
                        break;
                        case 'pastries':
                $query = "SELECT * FROM pastries";
                $res = $conn->query($query);
                if($res->setFetchMode(PDO::FETCH_ASSOC))
			{
                    echo "<br><div class='col-md-4'><label for=product_Id>Please Select a Product: </label>";
                    echo "<form method='POST' class='form-group' action = 'delete_product.php'>";
                    echo "<select id=product_Id class='form-control' name='product_Id'>";
                    while ($r = $res->fetch()){
                        echo "<option value='" . $r['product_Id'] ."'>" . $r['name'] ."</option>";
                        }
                        echo "</select>";
                    echo "<br><input type='submit' class='btn btn-danger' id='s1' name='delete_pastry' value='Delete'><br>";
                    "</form>";
                        }
                        break;
        }
}

if(isset($_POST['update_submit']) && isset($_POST['category'])){

        $category = $_POST['category'];

        switch($category){

            case 'cake':
                echo "<br><div class='col-md-4'>"
                    . "<form class='form-group' action='updateProduct.php' method='POST'>"
                    . "<input type='text' name='productId' placeholder='Enter productID to modify' class='form-control'>"
                    . "<br><input type='submit' name='cake_modify' class='btn btn-success' value='modifyCake'>"
                    . "</form>";
                    break;

            case 'bread':
                echo "<br><div class='col-md-4'>"
                    . "<form class='form-group' action='updateProduct.php' method='POST'>"
                    . "<input type='text' name='productId' placeholder='Enter productID to modify' class='form-control'>"
                    . "<br><input type='submit' name='bread_modify' class='btn btn-success' value='modifyBread'>"
                    . "</form>";
                    break;                

            case 'cookies':
                echo "<br><div class='col-md-4'>"
                    . "<form class='form-group' action='updateProduct.php' method='POST'>"
                    . "<input type='text' name='productId' placeholder='Enter productID to modify' class='form-control'>"
                    . "<br><input type='submit' name='cookie_modify' class='btn btn-success' value='modifyCookie'>"
                    . "</form>";
                    break;

            case 'pastries':
                echo "<br><div class='col-md-4'>"
                    . "<form class='form-group' action='updateProduct.php' method='POST'>"
                    . "<input type='text' name='productId' placeholder='Enter productID to modify' class='form-control'>"
                    . "<br><input type='submit' name='pastry_modify' class='btn btn-success' value='modifyPastry'>"
                    . "</form>";
                    break;
        }

    }
?>
    <span style="color:red;">
 <?php if(isset($_GET['delete_msg'])){
    echo $_GET['delete_msg'];}
 ?></span>
</body>
</html>