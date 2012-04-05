<?php

class Settings {

	private $data = array();
	private $db = null;

	public function __construct(){
		$this->siteRoot = str_replace("index.php", "", $_SERVER['PHP_SELF']);
		$this->documentRoot = str_replace("index.php", "", $_SERVER['SCRIPT_FILENAME']);
		$this->webRoot = $_SERVER['SERVER_NAME'] . $this->siteRoot; 
		$this->viewsPath = $this->documentRoot . "views/";
		$this->jsPath = $this->siteRoot . "js/";
		$this->cssPath = $this->siteRoot . "css/";
	}

	public function __get($name) {
		if (array_key_exists($name, $this->data)) {
			return $this->data[$name];
		}
	}

	public function __set($name, $value) {
		$this->data[$name] = $value;
		return $value;
	}

	public function __isset($name) {
		return isset($this->data[$name]);
	}

	public function __unset($name) {
		unset($this->data[$name]);
	}

	public function db() {
		if ($this->db == null) {
			$server = "localhost";
			$user = "root";
			$pass = "";
			$dbName = "test";
			$this->db = new mysqli($server, $user, $pass, $dbName);
		}
		return $this->db;
	}
}

function db(){
	global $config;
	return $config->db();
}

?>