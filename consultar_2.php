<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="">
<title>Cadastro de Clientes</title>
<link rel="stylesheet" href="estilo.css" type="text/css" media="all">
</head>

<body>
<?php 
session_start("pedido");
require_once 'checaadm.php';

$nome = $_POST["nome"];

    if (isset($_POST['bobi'])) {
	$pedsql = "SELECT * FROM cadbobina WHERE codi LIKE '%".$nome."%'";
	echo "BOBINAS <br/><br/>";
	$cliente = $pdo->prepare($pedsql);
    $cliente->execute();
    while($proccliente = $cliente->fetch(PDO::FETCH_ASSOC)){
    echo ' -   '.$proccliente['codi'].'<br/>';	
    }
	}
	
	elseif (isset($_POST['etiq'])) {
	$pedsql = "SELECT * FROM cadetiqueta WHERE codi LIKE '%".$nome."%'";
	echo "ETIQUETAS <br/><br/>";
	$cliente = $pdo->prepare($pedsql);
    $cliente->execute();
    while($proccliente = $cliente->fetch(PDO::FETCH_ASSOC)){
    echo ' -   '.$proccliente['codi'].'<br/>';	
    }
	}
	
	elseif (isset($_POST['vend'])) {
	$pedsql = "SELECT * FROM cadvendedora WHERE nome LIKE '%".$nome."%'";
	echo "VENDEDORAS <br/><br/>";
	$cliente = $pdo->prepare($pedsql);
    $cliente->execute();
    while($proccliente = $cliente->fetch(PDO::FETCH_ASSOC)){
    echo ' -   '.$proccliente['nome'].' - '.$proccliente['emai'].'<br/>';	
    }
	}
	
    elseif (isset($_POST['clie'])) {
	$pedsql = "SELECT * FROM cadcliente WHERE nome LIKE '%".$nome."%'";
	echo "Clientes <br/><br/>";
	$cliente = $pdo->prepare($pedsql);
    $cliente->execute();
    while($proccliente = $cliente->fetch(PDO::FETCH_ASSOC)){
    echo ' -   '.$proccliente['codi'].' - '.$proccliente['nome'].' - '.$proccliente['raza'].' - '.$proccliente['ende'].' - '.$proccliente['bair'].' - '.$proccliente['cida'].' - '.$proccliente['uf'].'<br/>';	
    echo ' -   '.$proccliente['cep'].' - '.$proccliente['cnpj'].' - '.$proccliente['iest'].' - '.$proccliente['tel1'].' - '.$proccliente['cont'].' - '.$proccliente['emai'].' - '.$proccliente['vend'].'<br/><br/>';	
    }
	}
  

?>
</body>
</html>