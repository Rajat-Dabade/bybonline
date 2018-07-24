<?php

    $email = $_GET['email'];
    $password = md5($_GET['password']);
    require '../includes/db_config.php';

    $db = new Database();
    $conn = $db->getConnection();

    $query = "SELECT id, name, email, password, mobile, entity FROM user WHERE email = '$email' and password = '$password'";

    $q = $conn->query($query);
	$cnt=0;		
	if($q->setFetchMode(PDO::FETCH_ASSOC))
	{
		
		while ($r = $q->fetch()) {
			 $name = $r['name'];
			 $id = $r['id'];
			 $mobile = $r['mobile'];
			 $entity = $r['entity'];
			 $cnt++;
		}
		
    }
    
    if($cnt==0)
	{
        echo $cnt;
	}
    else
    {
        session_start();
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['id'] = $id;
        $_SESSION['mobile'] = $mobile;
        $_SESSION['entity'] = $entity;

        echo $cnt;
	}