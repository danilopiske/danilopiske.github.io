	<?php
	try{
	$pdo = new PDO("mysql:host=localhost:3308;dbname=baseproducao","root","piske");
	}catch(PDOEception $error){
	echo $error->getMessage();
	
	require_once 'functions.php';
	
	}