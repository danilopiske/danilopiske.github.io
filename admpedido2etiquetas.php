<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="">
<title>Administrar Pedidos de Etiquetas</title>
<link rel="stylesheet" href="estilo.css" type="text/css" media="screen">

</head>

<body>
<?php
include("./includes/conexao.php");
session_start("pedido");
require_once 'checa.php';
?>
<h2><strong>Administrar Pedidos de Etiquetas</strong></h2>

<form enctype="multipart/form-data" action="procpedido.php" method="post" class="container-fluid">
  <table class="container-fluid">
  <tr>
  <td><h4>Cliente:</h4></td>
  <td><select name="pppd" id="pppd"> 
  <option value="">Selecione o Pedido</option>
  <?php
    $pedido = $pdo->prepare($_SESSION["pedsql"]);
    $pedido->execute();
    while($procped = $pedido->fetch(PDO::FETCH_ASSOC)){
    echo '<option value="'.$procped['pedi'].'">'.$procped['pedi']." - ".$procped['cnom']." - ".$procped['ccnp']." - ".$procped['data'].'</option>';
    }
  ?></select></td>
  </tr>
  <tr>
  <td><input type="hidden" name="test" class="form-control" value="admpedido2etiquetas" required></td>
  </tr>
  
  <tr>
  <td><h4><button type="submit" name="alterar" id="alterar" class="btn">Alterar</button></h4></td>
  </tr>
  <tr>
  <td><h4><button type="submit" name="deletar" id="deletar" class="btn">Deletar</button></h4></td>
  </tr>
  <tr>
  <td><h4><button type="submit" name="gerarop" id="gerarop" class="btn">Gerar O.P.</button></h4></td>

  </tr>
  </table>
  

  </form>
  
</body>

</html>