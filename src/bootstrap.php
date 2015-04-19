<?php
/**
 * Bootstrapping functions, essential and needed for Alpha to work together with some common helpers. 
 *
 */
 
/**
 * Default exception handler.
 *
 */
function myExceptionHandler($exception) {
	echo "Alpha: Uncaught exception: <p>" . $exception->getMessage() . "</p><pre>" . $exception->getTraceAsString(), "</pre>";
}
set_exception_handler('myExceptionHandler');
 
 
/**
 * Autoloader for classes.
 *
 */
function myAutoloader($class) {
	$path = ALPHA_INSTALL_PATH . "/src/{$class}/{$class}.php";
	if(is_file($path)) {
		include($path);
	}
	else {
		throw new Exception("Classfile '{$class}' does not exists.");
	}
}
spl_autoload_register('myAutoloader');

/**
 * Dump information stored in variables
 *
 */
function dump($array) {
 	echo "<pre>" . htmlentities(print_r($array, TRUE)) . "</pre>";
} 

function getCurrentUrl() {
	$url = "http";
	$url .= (@$_SERVER["HTTPS"] == "on") ? 's' : '';
	$url .= "://";
	$serverPort = ($_SERVER["SERVER_PORT"] == "80") ? '' :
	(($_SERVER["SERVER_PORT"] == 443 && @$_SERVER["HTTPS"] == "on") ? '' : ":{$_SERVER['SERVER_PORT']}");
	$url .= $_SERVER["SERVER_NAME"] . $serverPort . htmlspecialchars($_SERVER["REQUEST_URI"]);
	return $url;
}