<?php
include_once "../includes/db_config.php";
$db = new Database();

$conn = $db->getConnection();
$email = $_POST["email"];
$password=md5($_POST["password"]);
$cnt = 0;


$user_select_query="SELECT id, name, entity FROM user WHERE email='$email' AND password='$password' AND entity = 300";
$q = $conn->query($user_select_query);

if($q->setFetchMode(PDO::FETCH_ASSOC)){

	while($r = $q->fetch())
	{
		$name = $r["name"];
		$id= $r["id"];
		$entity = $r["entity"];
		$cnt++;
	}
}

if($cnt == 0)
{
	$msg="No such user exists!<br/>";
    header("Location:super_login.php?msg=$msg");
}
else {
    session_start();
    $_SESSION['sadminname'] = $name;
    $_SESSION['sadminid'] = $id;
    $_SESSION['sadminentity'] = $entity;
	header("Location:super_admin.php");
        
}
?>
