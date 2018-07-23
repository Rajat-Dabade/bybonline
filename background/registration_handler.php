<?php

$name = $_GET['name'];
$email = $_GET['email'];
$password = md5($_GET['password']);
$mobile = $_GET['mobile'];

require '../include/db_config.php';

$db = new Database();
$conn = $db->getConnection();

$cnt = 0;

$query = "SELECT email FROM registration where email = '$email'";
$q = $conn->query($query);
$q->setFetchMode(PDO::FETCH_ASSOC);
    
while ($r = $q->fetch()) {
    $cnt++;
}

if($cnt == 0)
{
    $query = "INSERT INTO registration(id, name, email, password, mobile, entity) values ('','$name', '$email', '$password', '$mobile', 100)";
		
		$conn->query($query);
		
		echo '<div class="alert alert-success">
						  <strong>Registered Successfully.</strong>
			</div>';
		}
		else
		{
			echo '<div class="alert alert-danger">
							  <strong>Contact the organizers</strong> 
				</div>';
		}
}

else{
    echo $cnt;
}