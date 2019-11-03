<?php
	require "environment.php";

	$config = array();

	if (ENVIRONMENT == 'development') {
		define("BASE_URL", "https://viniciusvazquez.com.br/MVC/");
		$config['dbname'] = 'mvc';
		$config['host'] = 'localhost';
		$config['dbuser'] = 'root';
		$config['dbpass'] = '';
	} else {
		define("BASE_URL", "https://viniciusvazquez.com.br/MVC/");
		$config['dbname'] = 'viaaut75_mvc';
		$config['host'] = 'localhost';
		$config['dbuser'] = 'viaaut75_admin';
		$config['dbpass'] = 'viaaut75_admin';
	}

	global $db;
	try {
		$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
	} catch (Exception $e) {
		echo "ERRO: ".$e->getMessage();
	}