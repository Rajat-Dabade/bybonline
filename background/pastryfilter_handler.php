<?php

    require '../includes/db_config.php';
    $db = new Database();
    $conn = $db->getConnection();

    $veg = $_GET['veg'];
    $range = $_GET['range'];

    if($veg == '' && $range == 0)
    {
        $element = array();
        $cnt = 0;
        $query = "SELECT * from pastries ORDER BY price DESC";
        $q = $conn->query($query);
        if($q->setFetchMode(PDO::FETCH_ASSOC))
	    {
            while($row = $q->fetch()){
                $element[] =  array('productId' => $row['product_Id'],'name' => $row['name'], 'image' => $row['image'], 'price' => $row['price'], 'veg' => $row['veg'], 'ingredients' => $row['ingredients']);
            }
        }

        echo json_encode($element);
    }

    else if($veg == '' && $range != 0)
    {
        $element = array();
        $cnt = 0;
        $query = "SELECT * from pastries where price <= '$range' ORDER BY price DESC";
        $q = $conn->query($query);
        if($q->setFetchMode(PDO::FETCH_ASSOC))
	    {
            while($row = $q->fetch()){
                $element[] =  array('productId' => $row['product_Id'],'name' => $row['name'], 'image' => $row['image'], 'price' => $row['price'], 'veg' => $row['veg'], 'ingredients' => $row['ingredients']);
            }
        }

        echo json_encode($element);
    }

    else if($veg != '' && $range == 0)
    {
        $element = array();
        $cnt = 0;
        $query = "SELECT * from pastries where veg = '$veg' ORDER BY price DESC";
        $q = $conn->query($query);
        if($q->setFetchMode(PDO::FETCH_ASSOC))
	    {
            while($row = $q->fetch()){
                $element[] =  array('productId' => $row['product_Id'],'name' => $row['name'], 'image' => $row['image'], 'price' => $row['price'], 'veg' => $row['veg'], 'ingredients' => $row['ingredients']);
            }
        }

        echo json_encode($element);
    }

    else if($veg != '' && $range != 0)
    {
        $element = array();
        $cnt = 0;
        $query = "SELECT * from pastries where veg = '$veg' and price <= '$range' ORDER BY price DESC";
        $q = $conn->query($query);
        if($q->setFetchMode(PDO::FETCH_ASSOC))
	    {
            while($row = $q->fetch()){
                $element[] =  array('productId' => $row['product_Id'],'name' => $row['name'], 'image' => $row['image'], 'price' => $row['price'], 'veg' => $row['veg'], 'ingredients' => $row['ingredients']);
            }
        }

        echo json_encode($element);
    }