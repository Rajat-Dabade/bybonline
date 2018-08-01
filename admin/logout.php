<?php
	
	session_start();
	unset($_SESSION['adminname']);
	session_destroy();
	echo "<script type='text/javascript'>
     window.location.href='admin_login.php'</script>";

?>