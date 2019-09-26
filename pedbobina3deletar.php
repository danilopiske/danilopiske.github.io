<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="">
<title>Deletar Pedido de Bobinas</title>
<link rel="stylesheet" href="estilo.css" type="text/css" media="all">
</head>

<body>
<?php
	session_start("pedido");
	require_once 'checa.php';
	include("./includes/conexao.php");
			
	$usur = $pdo->prepare($_SESSION["pedsql"]);
    $usur->execute();
    $usua = $usur->fetch(PDO::FETCH_ASSOC);
	$pedi = $usua['pedi'];
	$_SESSION["pedi"] = $pedi;
	$vexb = $usua['vexb'];
	$data = $usua['data'];
	$ccod = $usua['ccod'];
	$nome = $usua['cnom'];
	$raza = $usua["craz"];
	$ende = $usua["cend"];
	$bair = $usua["cbai"];
	$cida = $usua["ccid"];
	$uf = $usua["cuf"];
	$cep = $usua["ccep"];
	$cnpj = $usua["ccnp"];
	$iest = $usua["cies"];
	$tel1 = $usua["cte1"];
 	$emai = $usua["cema"];
 	$cont = $usua["ccon"];
	$bobi = $usua["bobi"];
 	$vias = $usua["bvia"];
 	$pape = $usua["bpap"];
 	$loca = $usua["loca"];
 	$nume = $usua["nume"];
 	$core = $usua["core"];
 	$arte = $usua["arte"];
 	$qtcx = $usua["qtcx"];
 	$valu = $usua["valu"];
 	$valt = $usua["valt"];
 	$praz = $usua["praz"];
 	$tran = $usua["tran"];
 	$obse = $usua["obse"];
 	$aimg = $usua["aimg"];
				
			
	

?>
<form enctype="multipart/form-data" action="procdelete.php" method="post" class="container-fluid">
<h3 align="center"><img src="images/logo.jpg" alt="" height="30"></a><strong>Pedido de Bobinas</strong></h3>
<h3 align="center"><button type="submit" name="delete" id="delete" class="btn">Deletar</button></h3>
<h5><strong>Data:</strong><?php echo $data; ?></h5>
<h5><strong>Vendedora:</strong><?php echo $vexb; ?></h5>
<h5><strong>Nome Fantasia:</strong><?php echo $nome; ?></h5>
<h5><strong>Razão Social:</strong><?php echo $raza; ?></h5>
<h5><strong>Endereço:</strong><?php echo $ende; ?></h5>
<h5><strong>Bairro:</strong><?php echo $bair; ?></h5>
<h5><strong>Cidade:</strong><?php echo $cida; ?></h5>
<h5><strong>Estado:</strong><?php echo $uf; ?></h5>
<h5><strong>Cep:</strong><?php echo $cep; ?></h5>
<h5><strong>CNPJ / CPF:</strong><?php echo $cnpj; ?></h5>
<h5><strong>Insc. Estadual:</strong><?php echo $iest; ?></h5>
<h5><strong>Telefone 1:</strong><?php echo $tel1; ?></h5>
<h5><strong>E-mail:</strong><?php echo $emai; ?></h5>
<h5><strong>Contato:</strong><?php echo $cont; ?></h5>
<h3>Bobinas</h3>
<h5><strong>Bobina:</strong><?php echo $bobi; ?></h5>
<h5><strong>Nº de Vias:</strong><?php echo $vias; ?></h5>
<h5><strong>Tipo de Papel:</strong><?php echo $pape; ?></h5>
<h5><strong>Local da Impressão:</strong><?php echo $loca; ?></h5>
<h5><strong>Nº de Cores:</strong><?php echo $nume; ?></h5>
<h5><strong>Cores:</strong><?php echo $core; ?></h5>
<h5><strong>Tipo de Arte:</strong><?php echo $arte; ?></h5>
<h5><strong>Quant. de Caixas:</strong><?php echo $qtcx; ?></h5>
<h5><strong>Valor Unitário: R$ </strong><?php echo $valu; ?></h5>
<h5><strong>Valor Total: R$ </strong><?php echo $valt; ?></h5>
<h5><strong>Prazo de Pagamento:</strong><?php echo $praz; ?></h5>
<h5><strong>Transporte:</strong><?php echo $tran; ?></h5>
<h5><strong>Observações:</strong><?php echo $obse; ?></h5>
<h5><strong>Nome do Arte:</strong>"<?php echo $aimg ?>"</h5>
<input type="hidden" name="test" class="form-control" value="pedbobina3deletar" required>






</form>
</body>
</html>