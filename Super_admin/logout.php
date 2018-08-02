<?php
	
	session_start();
	unset($_SESSION['sadminname']);
	session_destroy();
	echo "<script type='text/javascript'>
     window.location.href='super_login.php'</script>";

?>