<?php
include_once "../includes/db_config.php";

$db = new Database();
$conn = $db->getConnection();

$name=$_POST["name"];
$email=$_POST["email"];
$password=md5($_POST["password"]);
$mobile=$_POST["mobile"];

$select_query="SELECT id FROM user WHERE email='$email'" or die(mysqli_error($conn));
$query_result=$conn->query($select_query);

if($query_result->fetch(PDO::FETCH_ASSOC)>0){

    $signup_msg="Email id you entered already exists!<br/>";
    header("Location:admin_register.php?signup_msg=$signup_msg");

}
else{
    $insert_query="INSERT INTO user(name,email,password,mobile,entity) VALUES ('$name','$email','$password','$mobile',200)" or die(mysqli_error($conn));
    $insert_result=$conn->query($insert_query);
    $userid=mysqli_insert_id($conn);
    header("location:admin_login.php");
}
?>

