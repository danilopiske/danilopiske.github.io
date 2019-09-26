<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="">
<title>P.E.D.I.D.O</title>
<link rel="stylesheet" href="estilo.css" type="text/css" media="screen">

</head>

<body>
<?php 
session_start("pedido");
require_once 'checa.php';

?>
<h2><a href="index_vendedor.php><img src="images/logo.jpg" alt="" width="166" height="112"></a><strong>PEDIDOS</strong></h2>

<form enctype="multipart/form-data" action="procpedido.php" method="post" class="container-fluid">
  <table class="container-fluid">
  <tr>
  <td><h4>Digite parte do nome do Cliente:</h4></td>
  <td colspan="2"><input type="text" name="clie" id="clie" class="form-control" style="width:100%" required></td>
  </tr>
  <tr>
  <td><input type="hidden" name="test" class="form-control" value="pedido1" required></td>
  </tr>
  <tr>
  <td><h4><button type="submit" class="btn">Pesquisar Cliente</button></h4></td>
  </tr>
  </table>

  </form>
  
</body>

</html>