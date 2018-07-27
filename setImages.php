<?php

include_once 'includes/db_config.php';

$db = new Database();
$conn = $db->getConnection();

if(isset($_GET['productId']))
{
    $productId = mysql_real_escape_string($_GET['productId']);
    $query = "SELECT image from cake where productId = '$productId'";
    $q = $conn->query($query);

    if($q->setFetchMode(PDO::FETCH_ASSOC))
    {
        while ($r = $q->fetch()){
            $imageData = $r['image'];
        }
    }
    
    header("content-type : image/jpg");
    echo $imageData;
			
}
