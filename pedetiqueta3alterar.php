<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="">
<title>Pedido de Etiquetas</title>
<link rel="stylesheet" href="estilo.css" type="text/css" media="screen">

</head>

<body>
<h2><a><img src="images/logo.jpg" alt="" width="166" height="112"></a><strong>Pedido de Etiquetas</strong></h2>

<?php
include("./includes/conexao.php");
session_start("pedido");
require_once 'checa.php';

    $usur = $pdo->prepare($_SESSION["pedsql"]);
    $usur->execute();
    $usua = $usur->fetch(PDO::FETCH_ASSOC);
	$pedi = $usua['pedi'];
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
 	$etiq = $usua["etiq"];
 	$ebal = $usua["ebal"];
 	$epap = $usua["epap"];
 	$loca = $usua["loca"];
	$nume = $usua["nume"];
 	$core = $usua["core"];
 	$arte = $usua["arte"];
 	$qtrl = $usua["qtrl"];
 	$valu = $usua["valu"];
 	$valt = $usua["valt"];
 	$praz = $usua["praz"];
 	$tran = $usua["tran"];
 	$obse = $usua["obse"];
 	$aimg = $usua["aimg"];
    
	?>	


<form enctype="multipart/form-data" action="print_pedido_etiqueta_alterar.php" method="post" class="container-fluid">
  <table class="container-fluid">
   <td><input type="hidden" name="pedi" class="form-control" value="<?php echo $pedi?>" readonly required></td>
  <td nowrap=true><h4>Vendedora:</h4></td>
  <td colspan="5"><input type="text" name="vexb" id="vexb" class="form-control" style="width:100%" value="<?php echo $vexb?>" required></td></td>
  <td><h4>Data:</h4></td>
  <td><input type="text" name="data" class="form-control" value="<?php echo $data?>" readonly required></td>
  </tr>
  
   
  <tr>
  <td nowrap=true><h4>Cód. do Cliente:</h4></td>
  <td><input type="text" name="ccod" id="ccod" class="form-control" style="width:100%" value="<?php echo $ccod ?>" required></td>
  
  </tr>

  <tr>
  <td nowrap=true><h4>Razão Social:</h4></td>
  <td colspan="3"><input type="text" name="craz" id="craz" class="form-control" style="width:100%" value="<?php echo $raza ?>"  required></td>
  <td nowrap=true><h4>Nome Fantasia:</h4></td>
  <td colspan="8"><input type="text" name="cnom" id="cnom" class="form-control" style="width:100%" value="<?php echo $nome ?>" required></td>
  </tr>
  
  <tr>
  <td><h4>Endereço:</h4></td>
  <td colspan="2"><input type="text" name="cend" id="cend" class="form-control" style="width:100%" value="<?php echo $ende ?>" required></td>
  <td><h4>Bairro:</h4></td>
  <td colspan="8"><input type="text" name="cbai" id="cbai" class="form-control" style="width:100%" value="<?php echo $bair ?>" required></td>
  </tr>
  
  <tr>
  <td><h4>Cidade</h4></td>
  <td colspan="1"><input type="text" name="ccid" id="ccid" class="form-control" style="width:100%" value="<?php echo $cida ?>" required></td>
  <td><h4>Estado</h4></td>
  <td colspan="1"><input type="text" name="cuf" id="cuf" class="form-control" style="width:100%" value="<?php echo $uf ?>" required></td>
  <td><h4>Cep</h4></td>
  <td colspan="8"><input type="text" name="ccep" class="form-control" style="width:100%" value="<?php echo $cep ?>" required></td>	
  </tr>
  
  <tr>
  <td nowrap=true><h4>CNPJ / CPF</h4></td>
  <td colspan="2"><input type="text" name="ccnp" class="form-control" style="width:100%" value="<?php echo $cnpj ?>"  required></td>
  <td nowrap=true><h4>Insc. Estadual</h4></td>
  <td colspan="8"><input type="text" name="cies" class="form-control" style="width:100%" value="<?php echo $iest ?>"  required></td>
  </tr>
  
  <tr>
  <td><h4>Telefone 1</h4></td>
  <td colspan="1"><input type="text" name="cte1" class="form-control" style="width:100%" value="<?php echo $tel1 ?>"  required></td>
  <td><h4>E-mail</h4></td>
  <td colspan="10"><input type="text" name="cema" class="form-control" style="width:100%" value="<?php echo $emai ?>" required></td>
  <td><h4>Contato</h4></td>
  <td colspan="10"><input type="text" name="ccon" class="form-control" style="width:100%" value="<?php echo $cont ?>" required></td>
  </tr>
  
  <tr>
  <td colspan="10"><h1>Etiquetas</h1></td>
  </tr>
  
  <tr>
  <td><h4>Etiqueta</h4></td>
  <td colspan="10"><input type="text" name="etiq" class="form-control" style="width:100%" value="<?php echo $etiq ?>" required></td>
  <td nowrap=true><h4>Balança</h4></td>
  <td><input type="text" name="ebal" id="ebal" class="form-control" style="width:100%" value="<?php echo $ebal ?>" required></td>
  <td nowrap=true><h4>Tipo de Papel</h4></td>
  <td><input type="text" name="epap" id="epap" class="form-control" value="<?php echo $epap ?>" required></td>
  </tr>
  
  <tr>
  <td><h4>Impressão</h4></td>
  <td><input type="text" name="loca" class="form-control" value="<?php echo $loca ?>" required></td>
  <td nowrap=true><h4>Nº de Cores</h4></td>
  <td><input type="text" name="nume" class="form-control" value="<?php echo $nume ?>" required></td>
  <td><h4>Cores</h4></td>
  <td><input type="text" name="core" class="form-control" style="width:100%" value="<?php echo $core ?>" required></td>
  </tr>
  
  <tr>
  <td nowrap=true><h4>Tipo de Arte</h4></td>
  <td><input type="text" name="arte" class="form-control" style="width:100%" value="<?php echo $arte ?>" required></td>
  <td><h4>Quantidade</h4></td>
  <td><input type="text" name="qtrl" class="form-control" style="width:100%" value="<?php echo $qtrl ?>" required></td>
  <td nowrap=true><h4>Valor Unitário</h4></td>
  <td><input type="tel" name="valu" class="form-control" style="width:100%" value="<?php echo $valu ?>" required></td>
  </tr>
  
  <tr>
  <td><h4>Pagamento</h4></td>
  <td><input type="text" name="praz" class="form-control" style="width:100%" value="<?php echo $praz ?>" required></td>
  <td><h4>Transporte</h4></td>
  <td colspan="7"><input type="text" name="tran" class="form-control" style="width:100%" value="<?php echo $tran ?>" required></td>
  </tr>	
  
  <tr>
  <td nowrap=true><h4>Valor Total</h4></td>
  <td><input type="tel" name="valt" class="form-control" style="width:100%" value="<?php echo $valt ?>" required></td>
  <td><h4>Observações</h4></td>
  <td colspan="9"><input type="text" name="obse" class="form-control" style="width:100%" alue="<?php echo $obse ?>" ></td>
  </tr>
  
  <tr>
  <td><h4>Imagem</h4></td>
  <td><a href="<?php echo $aimg ?>"><img id="view-img" name="view-img" src="<?php echo $aimg ?>" width="200px"></a></td>
  <td><input type="hidden" name="aimg" value="<?php echo $aimg ?>"</td>
  </tr>
  
  <tr>
  <td><h4><button type="submit" class="btn">Salvar Pedido</button></h4></td>
  <td><h4><button type="reset" class="btn">Limpar Pedido</button></h4></td>
  </tr>
  </table>

  </form>


  
</body>

</html>