<?php
require 'lib/Slim/Slim.php';
require 'helpers/Settings.php';

//config setup
$config = new Settings();

//default script file name (all of them)
$config->scripts = array("jquery-1.7.1.min.js", "script.js");
$config->styles	 = array("styles.css");

$app = new Slim();

require 'helpers/helper.php';

//routes here
$app->get('/', 'home');
$app->get('/hi/:first(/)', 'hi');
$app->get('/test(/)', 'test');

$app->run();

//controllers here!
function home(){
	global $config;

	$title = "Hello World";

	require $config->viewsPath . "header.php";
	require $config->viewsPath . "home.php";
	require $config->viewsPath . "footer.php";
}


function hi($first){
	echo "hi $first";
}

function test(){
	phpinfo();
}

?>