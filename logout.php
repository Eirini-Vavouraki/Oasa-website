<?php
	session_start();
	unset($_SESSION['first_name']);
	unset($_SESSION['last_name']);
	unset($_SESSION['id']);
	unset($_SESSION['card_number']);
	unset($_SESSION['email']);
	if (isset($_SESSION['belongs_to'])) {
		unset($_SESSION['belongs_to']);
	}
	session_destroy();
	header("Location:log_in.php");
	exit();
?>