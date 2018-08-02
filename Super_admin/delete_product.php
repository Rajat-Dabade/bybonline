<?php
include_once "../includes/db_config.php";
$db = new Database();
$conn = $db->getConnection();
if(isset($_POST['delete_bread']) && isset($_POST['product_Id'])){
    $product_Id = $_POST['product_Id'];
    $query = "DELETE FROM bread where product_Id = '$product_Id'";
    $query_result=$conn->query($query);
    $delete_msg="product deleted<br/>";
    header("Location:modify_products.php?delete_msg=$delete_msg");
}
elseif(isset($_POST['delete_cake']) && isset($_POST['product_Id'])){
    $product_Id = $_POST['product_Id'];
    $query = "DELETE FROM cake where product_Id = '$product_Id'";
    $query_result=$conn->query($query);
    $delete_msg="product deleted<br/>";
    header("Location:modify_products.php?delete_msg=$delete_msg");
}
elseif(isset($_POST['delete_cookies']) && isset($_POST['product_Id'])){
    $product_Id = $_POST['product_Id'];
    $query = "DELETE FROM cookies where product_Id = '$product_Id'";
    $query_result=$conn->query($query);
    $delete_msg="product deleted<br/>";
    header("Location:modify_products.php?delete_msg=$delete_msg");
}
elseif(isset($_POST['delete_pastry']) && isset($_POST['product_Id'])){
    $product_Id = $_POST['product_Id'];
    $query = "DELETE FROM pastries where product_Id = '$product_Id'";
    $query_result=$conn->query($query);
    $delete_msg="product deleted<br/>";
    header("Location:modify_products.php?delete_msg=$delete_msg");
}
