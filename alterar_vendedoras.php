<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cadastro de Vendedoras</title>
<link rel="stylesheet" href="estilo.css" type="text/css" media="all">
</head>

<body>
<?php 
session_start("pedido");
require_once 'checaadm.php';

	$usur = $pdo->prepare($_SESSION["pedsql"]);
    $usur->execute();
    $usua = $usur->fetch(PDO::FETCH_ASSOC);
	$nome = $usua['nome'];
	$emai = $usua['emai'];

?>
<strong><a href="index_administrativo.php"><img src="images/logo.jpg" alt="" width="166" height="112"></a><h2>Cadastro de Vendedoras</strong>
</h2>
<form enctype="multipart/form-data" method="post" action="processa.php">
  <table class="container-fluid">
  <tr>
  <td>Nome</td>
  <td><input type="text" name="nome" class="form-control" size="30"  maxlength="15" value="<?php echo $nome ?>" required></td>
  </tr>
  <tr>
  <td>E-mail</td>
  <td><input type="text" name="emai" class="form-control" size="30"  maxlength="50" value="<?php echo $emai ?>" required></td>
  </tr>
  <tr>
  <td><input name="clie" type="hidden" class="form-control" size="100%width"  maxlength="14" value="<?php echo $_POST["clie"] ?>" required></td>
  <td><input type="hidden" name="test" class="form-control" value="altvendedora" required></td>
  </tr>
  <tr>
  <td><button type="submit" class="btn">Cadastrar Vendedora</button></td>
  <td><button type="reset" class="btn">Limpar Formulário</button></td>
</form>
</body>
</html>