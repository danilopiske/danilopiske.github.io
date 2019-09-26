<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="">
<title>Ordem de Produção de Bobinas</title>
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
			$data = $usua["data"];
			$pedi = $usua["pedi"];
			$vexb = $usua["vexb"];
			$cnom = $usua["cnom"];
			$craz = $usua["craz"];
			$bobi = $usua["bobi"];
			$bvia = $usua["bvia"];
			$bpap = $usua["bpap"];
			$nume = $usua["nume"];
			$core = $usua["core"];
			$loca = $usua["loca"];
			$qtcx = $usua["qtcx"];
			$tran = $usua["tran"];
			$arte = $usua["arte"];
			$obse = $usua["obse"];
			$aimg = $usua["aimg"];
			
						
			
			
	

?>
<h3 align="left"><a href="index_vendedoras.php"><img src="images/logo.jpg" alt="" height="30"></a><strong>Ordem de Produção de Bobinas (Aperte Crtl P) para imprimir o pedido </strong></h3>
<table content="fluid">
<tr>
<td nowrap=true><h3><strong><img name="aimg" src="<?php echo $aimg ?>" width='250px' align="center"/></strong></h3></td>
</tr>
<tr>
<td nowrap=true><h3><strong>Data: </strong></td><td nowrap=true><?php echo $data; ?></h3></td>
<td nowrap=true><h3><strong>Vendedora: </strong></td><td nowrap=true><?php echo $vexb; ?></h3></td>

</tr>
<tr>
<td nowrap=true><h3><strong>Nome Fantasia: </strong></td><td nowrap=true><?php echo $cnom; ?></h3></td>
<td nowrap=true><h3><strong>Razão Social: </strong></td><td nowrap=true><?php echo $craz; ?></h3></td>
</tr>
<tr>
<td nowrap=true><h3><strong>Bobina: </strong></td><td nowrap=true><?php echo $bobi; ?></h3></td>
<td nowrap=true><h3><strong>Nº de Vias: </strong></td><td nowrap=true><?php echo $bvia; ?></h3></td>
</tr>
<tr>
<td nowrap=true><h3><strong>Tipo de Papel: </strong></td><td nowrap=true><?php echo $bpap; ?></h3></td>
<td nowrap=true><h3><strong>Local da Impressão: </strong></td><td nowrap=true><?php echo $loca; ?></h3></td>
</tr>
<tr>
<td nowrap=true><h3><strong>Nº de Cores: </strong></td><td nowrap=true><?php echo $nume; ?> Cores</h3></td>
<td nowrap=true><h3><strong>Cores: </strong></td><td nowrap=true><?php echo $core; ?></h3></td>
</tr>
<tr>
<td nowrap=true><h3><strong>Tipo de Arte: </strong></td><td nowrap=true><?php echo $arte; ?></h3></td>
<td nowrap=true><h3><strong>Transporte: </strong></td><td nowrap=true><?php echo $tran; ?></h3></td>
</tr>
<tr>

</tr>
<tr>

</tr>
<tr>
</tr>
<tr>
<td nowrap=true><h3><strong>Quant. de Caixas: </strong></td><td nowrap=true><?php echo $qtcx; ?> Caixas</h3></td>
</tr>
<tr>
</tr>
<tr>
<td nowrap=true><h3><strong>Observações: </strong></td><td nowrap=true><strong><?php echo $obse; ?></strong></h3></td>
</tr>
<tr>
<td nowrap=true></td><td nowrap=true><h3><strong>_______________________</strong></h3></td>
<td nowrap=true>______________________</td><td nowrap=true><h3><strong>______________________</strong></h3></td>
</tr>
<tr>
<td nowrap=true></td><td nowrap=true><h3><strong>_______________________</strong></h3></td>
<td nowrap=true>______________________</td><td nowrap=true><h3><strong>______________________</strong></h3></td>
</tr>
<tr>
<td nowrap=true></td><td nowrap=true><h3><strong>_______________________</strong></h3></td>
<td nowrap=true>______________________</td><td nowrap=true><h3><strong>______________________</strong></h3></td>
</tr>
<tr>
<td nowrap=true><h3><strong>Quantidade Pronta: </strong></td><td nowrap=true><h3><strong>___________________Cxs</strong></h3></td>
<td nowrap=true><h3><strong>Data Corte: </strong></td><td nowrap=true><h3><strong>______________________</strong></h3></td>
</tr>
<tr>
<td nowrap=true><h3><strong>Bobinas Avulsas: </strong></td><td nowrap=true><h3><strong>______________________</strong></h3></td>
<td nowrap=true><h3><strong>Papel Usado: </strong></td><td nowrap=true><h3><strong>______________________</strong></h3></td>
</tr>
<tr>
<td nowrap=true><h3><strong>Data Impressão: </strong></td><td nowrap=true><h3><strong>_______/_________/______</strong></h3></td>
<td nowrap=true><h3><strong>Quant. Cxs Impressa: </strong></td><td nowrap=true><h3><strong>______________________</strong></h3></td>
</tr>
<tr>
<td nowrap=true><h3><strong>Funcionário: </strong></td><td nowrap=true><h3><strong>______________________</strong></h3></td>
</tr>
<tr>
<td align="center"><h3><strong> </strong></td><td align="center"><h3><strong> <strong></h3></td>
<td align="center"><h3><strong> <strong></td><td align="center"><h3><strong> <strong></h3></td>
</tr><tr>
<td align="center"><h3><strong>--------------------------------</strong></td><td align="center"><h3><strong>--------------------------------</strong></h3></td>
<td align="center"><h3><strong>--------------------------------</strong></td><td align="center"><h3><strong>--------------------------------</strong></h3></td>
</tr><tr>
<td align="center"><h3><strong> <strong></td><td align="center"><h3><strong> <strong></h3></td>
<td align="center"><h3><strong> <strong></td><td align="center"><h3><strong> <strong></h3></td>
</tr>
<tr>
<td nowrap=true><h3><strong>Nome Fantasia: </strong></td><td nowrap=true><?php echo $cnom; ?></h3></td>
<td nowrap=true<h3><strong>Razão Social: </strong></td><td nowrap=true><?php echo $craz; ?></h3></td>
</tr>
<tr>
<td nowrap=true><h3><strong>Bobina: </strong></td><td nowrap=true><?php echo $bobi; ?></h3></td>
<td nowrap=true><h3><strong>Nº de Vias: </strong></td><td nowrap=true><?php echo $bvia; ?></h3></td>
</tr>
<tr>
<td nowrap=true><h3><strong>Nº de Cores: </strong></td><td nowrap=true><?php echo $nume; ?> Cores</h3></td>
<td nowrap=true><h3><strong>Cores: </strong></td><td nowrap=true><?php echo $core; ?></h3></td>
</tr>
<tr>
<td nowrap=true><h3><strong>Quant. de Caixas: </strong></td><td nowrap=true><?php echo $qtcx; ?> Caixas</h3></td>
</tr>
<tr>
<td nowrap=true><h3><strong>Data Recebimento: </strong></td><td nowrap=true><h3><strong>______________________</strong></h3></td>
<td nowrap=true><h3><strong>Data Impressão: </strong></td><td nowrap=true><h3><strong>______________________</strong></h3></td>
</tr>


















</table>




</body>
</html>