<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="">
<title>Alterar</title>
<link rel="stylesheet" href="estilo.css" type="text/css" media="all">
</head>

<body>
<?php 
session_start("pedido");
require_once 'checaadm.php';

$nome = $_POST["nome"];

if (isset($_POST['bobi'])) {
	$pedsql = "SELECT * FROM cadbobina WHERE codi LIKE '%".$nome."%'";
	$go = "bobina";
}
	
	elseif (isset($_POST['etiq'])) {
	$pedsql = "SELECT * FROM cadetiqueta WHERE codi LIKE '%".$nome."%'";
	$go = "etiqueta";
}
	
	elseif (isset($_POST['vend'])) {
	$pedsql = "SELECT * FROM cadvendedora WHERE nome LIKE '%".$nome."%'";
	$go = "vendedoras";
}
	
    elseif (isset($_POST['clie'])) {
	$pedsql = "SELECT * FROM cadcliente WHERE nome LIKE '%".$nome."%'";
	$go = "cliente";
}
	$_SESSION["pedsql"]=$pedsql;
  
?>
<strong><a href="index_administrativo.php"><img src="images/logo.jpg" alt="" width="166" height="112"></a><h2>Alterador</strong>
</h2>
<form enctype="multipart/form-data" method="post" action="<?php echo 'alterar_'.$go.'.php' ?>">
  <table class="container-fluid">
  <tr>
  <td><h4>Alterar:</h4></td>
  <td><select name="clie" id="clie"> 
  <option value="">Selecione o que deseja Alterar</option>
  <?php
    $cliente = $pdo->prepare($pedsql);
    $cliente->execute();
    if (isset($_POST['bobi'])) {
	while($proccliente = $cliente->fetch(PDO::FETCH_ASSOC)){
    echo '<option value="'.$proccliente['cont'].'">'.$proccliente['codi'].'</option>';
    }}
	if (isset($_POST['etiq'])) {
	while($proccliente = $cliente->fetch(PDO::FETCH_ASSOC)){
    echo '<option value="'.$proccliente['cont'].'">'.$proccliente['codi'].'</option>';
    }}
	if (isset($_POST['vend'])) {
	while($proccliente = $cliente->fetch(PDO::FETCH_ASSOC)){
    echo '<option value="'.$proccliente['codi'].'">'.$proccliente['nome']." - ".$proccliente['emai'].'</option>';
	}}
	if (isset($_POST['clie'])) {
	while($proccliente = $cliente->fetch(PDO::FETCH_ASSOC)){
    echo '<option value="'.$proccliente['codi'].'">'.$proccliente['codi']." - ".$proccliente['nome']." - ".$proccliente['cida'].'</option>';
    }}
	
  ?></select></td>
  </tr>
  <tr>
  <td><button type="submit" name="butt" id="butt" class="btn">Editar</button></td>
  </tr>
  
</form>
</body>
</html>