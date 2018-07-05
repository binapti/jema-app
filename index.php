<?php
	define('BASEPATH', __DIR__);
	define('CONTROLLER_PATH', __DIR__ . DIRECTORY_SEPARATOR . 'controllers' . DIRECTORY_SEPARATOR);
	define('MODEL_PATH', __DIR__ . DIRECTORY_SEPARATOR . 'models' . DIRECTORY_SEPARATOR);
	define('VIEW_PATH', __DIR__ . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
	
	if(file_exists($loader = BASEPATH .'/app/Loader.php'))
	{
		require_once($loader);
		
		$load = new Loader();
	}
	$page = $_GET['page'];
	echo $page;
	
	$age = "34";
	//ob_start();
	//require_once('login.php');
	
//echo ob_get_clean();

echo __DIR__;
echo $load->_class('pau');
?>