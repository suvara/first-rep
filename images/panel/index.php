<?php

include("application/include/listincludefile.php");

set_include_path(get_include_path()
				 .PATH_SEPARATOR.'application/controllers'
				 .PATH_SEPARATOR.'application/models'
				 .PATH_SEPARATOR.'application/views'
				 .PATH_SEPARATOR.'libs');

function __autoload($class){
	require_once ($class.'.php');
	}
//$db=Dbmysql::getInstance("../application/include/vars.php");	
$front=FrontController::getInstance();
$front->route();
echo $front->getBody();// буферизация не работает должным образом ob_start ...
?>