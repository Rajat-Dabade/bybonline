<?php

    session_start();

    if(!isset($_SESSION['sadminname']))
    {
        $msg = "Login First";
        session_destroy();
        header("Location:admin_login.php?msg=$msg");
    }
    if($_SESSION['sadminentity'] != 300)
    {
        $msg = "Only for Super Admins";
        session_destroy();
        header("Location:admin_login.php?msg=$msg");
    }


include_once "../includes/db_config.php";
$db = new Database();
$conn = $db->getConnection();
if(isset($_POST['bread_submit'])){

                $target_dir = '../images/bread/'.basename($_FILES['image']['name']);

                $name = $_POST['name'];
                $shape = $_POST['shape'];

                $image = 'images/bread/'.basename($_FILES['image']['name']);

                $price = $_POST['price'];
                $query = "INSERT INTO bread(name, shape, image, price) VALUES ('$name', '$shape', '$image','$price')";
                $query_result=$conn->query($query);

                if (move_uploaded_file($_FILES['image']['tmp_name'], $target_dir)) {
                    echo "File is valid, and was successfully uploaded.\n";
                } else {
                    echo "Upload failed";
                }

            }
             elseif(isset($_POST['cake_submit'])){

                        $target_dir = '../images/cake/'.basename($_FILES['image']['name']);

                        $name = $_POST['name'];
                        $shape = $_POST['shape'];

                        $image = 'images/cake/'.basename($_FILES['image']['name']);


                        $price = $_POST['price'];
                        $veg = $_POST['veg'];
                        $sugarFree = $_POST['sugarFree'];
                        $ingredients = $_POST['ingredients'];
                        $weight = $_POST['weight'];
                    
                        $query = "INSERT INTO cake(name, shape, image, price, veg, sugarFree, ingredients, weight) VALUES ('$name', '$shape', '$image','$price', '$veg', '$sugarFree', '$ingredients', '$weight')";
                        $query_result=$conn->query($query);

                        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_dir)) {
                            echo "File is valid, and was successfully uploaded.\n";
                        } else {
                            echo "Upload failed";
                        }

             } 

                elseif(isset($_POST['cookie_submit'])){

                    $target_dir = '../images/cookie/'.basename($_FILES['image']['name']);

                    $name = $_POST['name'];

                    $image = 'images/cookie/'.basename($_FILES['image']['name']);

                    $price = $_POST['price'];
                    $ingredients = $_POST['ingredients'];
                    $weight = $_POST['weight'];



                    $query = "INSERT INTO cookies(name, image, price, ingredients, weight) VALUES ('$name', '$image','$price', '$ingredients', '$weight')";
                    $query_result=$conn->query($query);

                    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_dir)) {
                        echo "File is valid, and was successfully uploaded.\n";
                    } else {
                        echo "Upload failed";
                    }
                    
            }
            elseif(isset($_POST['pastry_submit'])){

                    $target_dir = '../images/pastrie/'.basename($_FILES['image']['name']);

                    $name = $_POST['name'];                

                    $image = 'images/pastrie/'.basename($_FILES['image']['name']);

                    $price = $_POST['price'];
                    $veg = $_POST['veg'];              
                    $ingredients = $_POST['ingredients'];              

                    $query = "INSERT INTO pastries(name, image, price, veg, ingredients) VALUES ('$name', '$image','$price', '$veg', '$ingredients')";
                    $query_result=$conn->query($query);

                    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_dir)) {
                        echo "File is valid, and was successfully uploaded.\n";
                    } else {
                        echo "Upload failed";
                    }
            }
                    