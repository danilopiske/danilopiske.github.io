<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="">
<title>Administrar Pedidos</title>
<link rel="stylesheet" href="estilo.css" type="text/css" media="screen">

</head>

<body>
<?php 
session_start("pedido");
require_once 'checa.php';

?>
<h2><strong> ' ' </strong></h2>

<form enctype="multipart/form-data" action="procpedido.php" method="post" class="container-fluid">
  <table class="container-fluid">
  
  <tr><h2><strong>Administrar Pedidos</strong></h2>
  </tr>
  <tr>
  </tr>
  <tr>
  </tr>
  <tr>
  </tr>
  <tr>
  <td><h4>Digite parte do nome do Cliente:</h4></td>
  <td colspan="2"><input type="text" name="clie" id="clie" class="form-control" style="width:100%" required></td>
  </tr>
  <tr>
  <td><input type="hidden" name="test" class="form-control" value="admped1" required></td>
  </tr>
  <tr>
  <td><h4><button type="submit" name="bobina" id="bobina" class="btn">Bobinas</button></h4></td>
  <td><h4><button type="submit" name="etiqueta" id="etiqueta" class="btn">Etiquetas</button></h4></td>
  </tr>
  </table>

  </form>
  
</body>

</html>