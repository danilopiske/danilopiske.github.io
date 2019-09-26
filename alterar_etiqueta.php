<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="">
<title>Cadastro de Etiquetas</title>
<link rel="stylesheet" href="estilo.css" type="text/css" media="all">
</head>

<body>
<?php 
session_start("pedido");
require_once 'checaadm.php';

	$usur = $pdo->prepare($_SESSION["pedsql"]);
    $usur->execute();
    $usua = $usur->fetch(PDO::FETCH_ASSOC);
	$codi = $usua['codi'];

?>
<strong><a href="index_administrativo.php"><img src="images/logo.jpg" alt="" width="166" height="112"></a><h2>Cadastro de Etiquetas</strong>
</h2>
<form enctype="multipart/form-data" method="post" action="processa.php">
  <table class="container-fluid">
  <tr>
  <td>Etiqueta</td>
  <td><input name="codi" type="text" required class="form-control" size="100%width"  maxlength="11" value="<?php echo $codi ?>" required></td>
  <td><input name="clie" type="hidden" class="form-control" size="100%width"  maxlength="14" value="<?php echo $_POST["clie"] ?>" required></td>
  </tr>
  <tr>
  <td><input type="hidden" name="test" class="form-control" value="altetiqueta" required></td>
  </tr>
  <tr>
  <td><button type="submit" class="btn">Cadastrar Etiqueta</button></td>
  <td><button type="reset" class="btn">Limpar Formulário</button></td>
</form>
</body>
</html>