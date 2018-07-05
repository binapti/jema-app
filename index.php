<?php
	$page = $_GET['page'];
	echo $page;
	
	$age = "34";
	ob_start();
	require_once('login.php');
	
	echo ob_get_clean();
?>