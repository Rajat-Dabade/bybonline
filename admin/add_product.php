<?php
include_once "../includes/db_config.php";
$db = new Database();
$conn = $db->getConnection();
if(isset($_POST['bread_submit'])){
                $name = $_POST['name'];
                $shape = $_POST['shape'];
                $image = $_FILES['image']['name'];
                $price = $_POST['price'];
                $query = "INSERT INTO bread(name, shape, image, price) VALUES ('$name', '$shape', '$image','$price')";
                $query_result=$conn->query($query);
                echo "product inserted";
            }
             elseif(isset($_POST['cake_submit'])){
                        $name = $_POST['name'];
                        $shape = $_POST['shape'];
                        $image = $_FILES['image']['name'];
                        $price = $_POST['price'];
                        $veg = $_POST['veg'];
                        $sugarFree = $_POST['sugarFree'];
                        $ingredients = $_POST['ingredients'];
                        $weight = $_POST['weight'];
                        $query = "INSERT INTO cake(name, shape, image, price, veg, sugarFree, ingredients, weight) VALUES ('$name', '$shape', '$image','$price', '$veg', '$sugarFree', '$ingredients', '$weight')";
                        $query_result=$conn->query($query);
                    }
                    elseif(isset($_POST['cookies_submit'])){
                $name = $_POST['name'];
                $image = $_FILES['image']['name'];
                $price = $_POST['price'];
                $ingredients = $_POST['ingredients'];
                $weight = $_POST['weight'];
                $query = "INSERT INTO cookies(name, image, price, ingredients) VALUES ('$name', '$image','$price', '$ingredients')";
                $query_result=$conn->query($query);
            }
            elseif(isset($_POST['pastry_submit'])){
                $name = $_POST['name'];                
                $image = $_FILES['image']['name'];
                $price = $_POST['price'];
                $veg = $_POST['veg'];              
                $ingredients = $_POST['ingredients'];              
                $query = "INSERT INTO pastries(name, image, price, veg, ingredients) VALUES ('$name', '$image','$price', '$veg', '$ingredients')";
                $query_result=$conn->query($query);
            }
                    