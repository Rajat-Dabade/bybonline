<?php

    require '../includes/db_config.php';
    $db = new Database();
    $conn = $db->getConnection();

    $shape = $_GET['shape'];
    $weight = $_GET['weight'];
    $range = $_GET['range'];

    if($shape == '' && $weight == '' && $range == 0)
    {
        $element = array();
        $cnt = 0;
        $query = "SELECT * from bread ORDER BY price DESC";
        $q = $conn->query($query);
        if($q->setFetchMode(PDO::FETCH_ASSOC))
	    {
            while($row = $q->fetch()){
                $element[] =  array('productId' => $row['product_Id'],'name' => $row['name'], 'image' => $row['image'], 'price' => $row['price'], 'shape' => $row['shape']);
            }
        }

        echo json_encode($element);
    }
    else if($shape != '' && $weight == '' && $range == 0)
    {
        $element = array();
        $cnt = 0;
        $query = "SELECT * from bread where shape = '$shape' ORDER BY price DESC";
        $q = $conn->query($query);
        if($q->setFetchMode(PDO::FETCH_ASSOC))
	    {
            while($row = $q->fetch()){
                $element[] =  array('productId' => $row['product_Id'],'name' => $row['name'], 'image' => $row['image'], 'price' => $row['price'], 'shape' => $row['shape']);
            }
        }

        echo json_encode($element);
    }


    else if($shape == '' && $weight != '' && $range == 0)
    {
        $element = array();
        $cnt = 0;
        $query = "SELECT * from bread where weight = '$weight'";
        $q = $conn->query($query);
        if($q->setFetchMode(PDO::FETCH_ASSOC))
	    {
            while($row = $q->fetch()){
                $element[] =  array('productId' => $row['product_Id'],'name' => $row['name'], 'image' => $row['image'], 'price' => $row['price'], 'shape' => $row['shape']);
            }
        }

        echo json_encode($element);
    }

    else if($shape == '' && $weight == '' && $range != 0)
    {
        $element = array();
        $cnt = 0;
        $query = "SELECT * from bread where price <= '$range' ORDER BY price DESC";
        $q = $conn->query($query);
        if($q->setFetchMode(PDO::FETCH_ASSOC))
	    {
            while($row = $q->fetch()){
                $element[] =  array('productId' => $row['product_Id'],'name' => $row['name'], 'image' => $row['image'], 'price' => $row['price'], 'shape' => $row['shape']);
            }
        }

        echo json_encode($element);
    }

    else if($shape != '' && $weight != '' && $range == 0)
    {
        $element = array();
        $cnt = 0;
        $query = "SELECT * from bread where shape = '$shape' and weight = '$weight' ORDER BY price DESC";
        $q = $conn->query($query);
        if($q->setFetchMode(PDO::FETCH_ASSOC))
	    {
            while($row = $q->fetch()){
                $element[] =  array('productId' => $row['product_Id'],'name' => $row['name'], 'image' => $row['image'], 'price' => $row['price'], 'shape' => $row['shape']);
            }
        }

        echo json_encode($element);
    }

    else if($shape != '' && $weight == '' && $range != 0)
    {
        $element = array();
        $cnt = 0;
        $query = "SELECT * from bread where shape = '$shape' and price <= '$range' ORDER BY price DESC";
        $q = $conn->query($query);
        if($q->setFetchMode(PDO::FETCH_ASSOC))
	    {
            while($row = $q->fetch()){
                $element[] =  array('productId' => $row['product_Id'],'name' => $row['name'], 'image' => $row['image'], 'price' => $row['price'], 'shape' => $row['shape']);
            }
        }

        echo json_encode($element);
    }

    else if($shape == '' && $weight != '' && $range != 0)
    {
        $element = array();
        $cnt = 0;
        $query = "SELECT * from bread where weight = '$weight' and price <= '$range' ORDER BY price DESC";
        $q = $conn->query($query);
        if($q->setFetchMode(PDO::FETCH_ASSOC))
	    {
            while($row = $q->fetch()){
                $element[] =  array('productId' => $row['product_Id'],'name' => $row['name'], 'image' => $row['image'], 'price' => $row['price'], 'shape' => $row['shape']);
            }
        }

        echo json_encode($element);
    }

    else if($shape != '' && $weight != '' && $range != 0)
    {
        $element = array();
        $cnt = 0;
        $query = "SELECT * from bread where shape = '$shape' and price <= '$range' and weight = '$weight' ORDER BY price DESC";
        $q = $conn->query($query);
        if($q->setFetchMode(PDO::FETCH_ASSOC))
	    {
            while($row = $q->fetch()){
                $element[] =  array('productId' => $row['product_Id'],'name' => $row['name'], 'image' => $row['image'], 'price' => $row['price'], 'shape' => $row['shape']);
            }
        }

        echo json_encode($element);
    }
