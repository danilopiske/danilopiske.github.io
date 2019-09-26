<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cadastro de Usuários</title>
<link rel="stylesheet" href="estilo.css" type="text/css" media="all">
</head>

<body>
<?php 
session_start("pedido");
require_once 'checaadm.php';

?>
<strong><a href="index_administrativo.php"><img src="images/logo.jpg" alt="" width="166" height="112"></a><h2>Cadastro de Usuários</strong>
</h2>
<form enctype="multipart/form-data" method="post" action="processa.php">
  <table class="container-fluid">
  <tr>
  <td>Nome</td>
  <td><input type="text" name="user" id="user" class="form-control" size="30"  maxlength="15" required></td>
  </tr>
  <tr>
  <td>Password</td>
  <td><input type="password" name="pass" id="pass" class="form-control" size="30"  maxlength="50" required></td>
  </tr>
  <tr>
  <td>Tipo de Acesso</td>
  <td><select name="tipo" id="tipo"required>
  <option value="vendas">Vendas</option>
  </td>
  </tr>
  <tr>
  <td><input type="hidden" name="test" class="form-control" value="cadusers" required></td>
  </tr>
  <tr>
  <td><button type="submit" class="btn">Cadastrar Vendedora</button></td>
  <td><button type="reset" class="btn">Limpar Formulário</button></td>
</form>
</body>
</html>