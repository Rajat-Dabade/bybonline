<?php

	require '../includes/db_config.php';
    $db = new Database();
    $conn = $db->getConnection();

    $weight = $_GET['weight'];
    $range = $_GET['range'];

    if($weight == '' && $range == 0)
    {
        $element = array();
        $cnt = 0;
        $query = "SELECT * from cookies ORDER BY price DESC";
        $q = $conn->query($query);
        if($q->setFetchMode(PDO::FETCH_ASSOC))
	    {
            while($row = $q->fetch()){
                $element[] =  array('productId' => $row['product_Id'], 'name' => $row['name'], 'image' => $row['image'], 'weight' => $row['weight'], 'price' => $row['price'], 'ingredients' => $row['ingredients']);
            }
        }

        echo json_encode($element);
    }

    else if($weight == '' && $range != 0)
    {
        $element = array();
        $cnt = 0;
        $query = "SELECT * from cookies where price <= '$range' ORDER BY price DESC";
        $q = $conn->query($query);
        if($q->setFetchMode(PDO::FETCH_ASSOC))
	    {
            while($row = $q->fetch()){
                $element[] =  array('productId' => $row['product_Id'], 'name' => $row['name'], 'image' => $row['image'], 'weight' => $row['weight'], 'price' => $row['price'], 'ingredients' => $row['ingredients']);
            }
        }

        echo json_encode($element);
    }

    else if($weight != '' && $range == 0)
    {
        $element = array();
        $cnt = 0;
        $query = "SELECT * from cookies where weight = '$weight' ORDER BY price DESC";
        $q = $conn->query($query);
        if($q->setFetchMode(PDO::FETCH_ASSOC))
	    {
            while($row = $q->fetch()){
                $element[] =  array('productId' => $row['product_Id'], 'name' => $row['name'], 'image' => $row['image'], 'weight' => $row['weight'], 'price' => $row['price'], 'ingredients' => $row['ingredients']);
            }
        }

        echo json_encode($element);
    }

    else if($weight != '' && $range != 0)
    {
        $element = array();
        $cnt = 0;
        $query = "SELECT * from cookies where weight = '$weight' and price <= '$range' ORDER BY price DESC";
        $q = $conn->query($query);
        if($q->setFetchMode(PDO::FETCH_ASSOC))
	    {
            while($row = $q->fetch()){
                $element[] =  array('productId' => $row['product_Id'], 'name' => $row['name'], 'image' => $row['image'], 'weight' => $row['weight'], 'price' => $row['price'], 'ingredients' => $row['ingredients']);
            }
        }

        echo json_encode($element);
    }