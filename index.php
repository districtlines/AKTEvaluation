<?php
	error_reporting(E_ALL);
	ini_set('display_errors','On');
	date_default_timezone_set('America/New_York');

	require_once 'classes/main.php';
	$Eval = new Evaluation();

	include_once 'views/main.php';
?>