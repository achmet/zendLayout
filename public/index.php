<?php
set_time_limit ( 3600 );
date_default_timezone_set('Europe/Berlin');


defined('APPLICATION_PATH') || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));

defined('APPLICATION_ENV') || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'production'));


require_once 'Zend/Application.php';

$application = new Zend_Application(
                    APPLICATION_ENV,
                    APPLICATION_PATH .'/configs/application.ini'
                );
$application->bootstrap()->run(); 

//echo '<pre>';
//print_r($application);
 
?>