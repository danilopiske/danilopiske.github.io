	<?php
	try{
	$pdo = new PDO("mysql:host=localhost:3306;dbname=bd_suprema","root","suprema77");
	}catch(PDOEception $error){
	echo $error->getMessage();
	
	require_once 'functions.php';
	
	}
	?>