<?php
require 'lib/Slim/Slim.php';
require 'helpers/Settings.php';

//config setup
$config = new Settings();
$config->siteRoot = str_replace("index.php", "", $_SERVER['PHP_SELF']);
$config->documentRoot = str_replace("index.php", "", $_SERVER['SCRIPT_FILENAME']);
$config->webRoot = $_SERVER['SERVER_NAME'] . $config->siteRoot; 
$config->viewsPath = $config->documentRoot . "views/";
$config->jsPath = $config->siteRoot . "js/";
$config->cssPath = $config->siteRoot . "css/";

//default script file name (all of them)
$config->scripts = array("jquery-1.7.1.min.js", "script.js");
$config->styles	 = array("styles.css");

$app = new Slim();

require 'helpers/helper.php';

$app->get('/', 'home');
$app->get('/login','login');
$app->get('/hi/:first/:last/', 'hi');
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

function user(){

}

function hi($first,$last){
	echo "hi $first $last ";
}

function test(){
	phpinfo();
}

?>