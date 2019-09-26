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

?>
<strong><a href="index_administrativo.php"><img src="images/logo.jpg" alt="" width="166" height="112"></a><h2>Alterador</strong>
</h2>
<form enctype="multipart/form-data" method="post" action="alterar_2.php">
  <table class="container-fluid">
  <tr>
  <td>Alterar</td>
  <td><input name="nome" type="text" class="form-control" size="100%width"  maxlength="14" placeholder=""></td>
  </tr>
  <tr>
  <td>  </td>
  <td>  </td>
  </tr>
  <tr>
  <td><button type="submit" name="bobi" id="bobi" class="btn">Bobina</button></td>
  </tr>
  <tr>
  <td><button type="submit" name="etiq" id="etiq" class="btn">Etiqueta</button></td>
  </tr>
  <tr>
  <td><button type="submit" name="vend" id="vend" class="btn">Vendedora</button></td>
  </tr>
  <tr>
  <td><button type="submit" name="clie" id="clie" class="btn">Cliente</button></td>
  </tr>
  
</form>
</body>
</html>