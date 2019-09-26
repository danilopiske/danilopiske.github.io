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
	
	$clie = $_POST["clie"];
	$pedsql = "SELECT * FROM cadcliente WHERE codi LIKE ".$clie."";
	$usur = $pdo->prepare($pedsql);
    $usur->execute();
    $usua = $usur->fetch(PDO::FETCH_ASSOC);
	$codi = $usua['codi'];
	$nome = $usua['nome'];
	$raza = $usua['raza'];
	$ende = $usua['ende'];
	$bair = $usua['bair'];
	$cida = $usua['cida'];
	$uf = $usua['uf'];
	$cep = $usua['cep'];
	$cnpj = $usua['cnpj'];
	$iest = $usua['iest'];
	$tel1 = $usua['tel1'];
	$cont = $usua['cont'];
	$emai = $usua['emai'];
	$vend = $usua['vend'];
	
?>
<strong><a href="index_administrativo.php"><img src="images/logo.jpg" alt="" width="166" height="112"></a><h2>Cadastro de Clientes</strong></h2>
<form enctype="multipart/form-data" method="post" action="processa.php">
  <table class="container-fluid">
  <tr>
  <td>Codigo</td>
  <td><input name="codi" type="text" required class="form-control" value="<?php echo $codi ?>" maxlength="10"></td>
  <td>Nome Fantasia</td>
  <td><input type="text" name="nome" class="form-control" size="35" value="<?php echo $nome ?>" required></td>
  <td>Razão Social</td>
  <td><input type="text" name="raza" class="form-control" size="35" value="<?php echo $raza ?>" required></td>
  <td>Vendedora</td>
  <td><input type="text" name="vend" class="form-control" size="15" value="<?php echo $vend ?>" required></td>
  </tr>
  <tr>
  <td>Endereço</td>
  <td><input type="text" name="ende" class="form-control" value="<?php echo $ende ?>" required></td>
  <td>Bairro</td>
  <td><input type="text" name="bair" class="form-control" value="<?php echo $bair ?>" required></td>
  <td>Cidade</td>
  <td><input type="text" name="cida" class="form-control" value="<?php echo $cida ?>" required></td>
  <td>Estado UF</td>
  <td><input type="text" name="uf" class="form-control" value="<?php echo $uf ?>" required></td>
  </tr>
  
  <tr>
  <td>Cep</td>
  <td><input type="text" name="cep" class="form-control" value="<?php echo $cep ?>" required></td>
  <td>Cnpj / Cpf</td>
  <td><input type="text" name="cnpj" class="form-control" value="<?php echo $cnpj ?>" required><br></td>
  <td>Insc. Estadual</td>
  <td><input type="text" name="iest" class="form-control" value="<?php echo $iest ?>"> </td>
  </tr>
  
  <tr>
  <td>Contato</td>
  <td><input type="text" name="cont" class="form-control" value="<?php echo $cont ?>" required></td>
  <td>Telefone 1</td>
  <td><input type="text" name="tel1" class="form-control" value="<?php echo $tel1 ?>" required></td>
  <td>E-mail</td>
  <td><input type="text" name="emai" class="form-control" value="<?php echo $emai ?>" required></td>
  </tr>
  <tr>
  <td><input name="clie" type="hidden" class="form-control" size="100%width"  maxlength="14" value="<?php echo $_POST["clie"] ?>" required></td>
  <td><input type="hidden" name="test" class="form-control" value="altcliente" required></td>
  </tr>
  <tr>
  <td><button type="submit" class="btn">Cadastrar Cliente</button></td>
  <td><button type="reset" class="btn">Limpar Formulário</button></td>
  </tr>
</form>

</body>
</html>