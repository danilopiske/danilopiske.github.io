<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="">
<title>Pedido de Bobinas</title>
<link rel="stylesheet" href="estilo.css" type="text/css" media="screen">

</head>

<body>
<h2><a><img src="images/logo.jpg" alt="" width="166" height="112"></a><strong>Pedido de Bobinas</strong></h2>

<?php
include("./includes/conexao.php");
session_start("pedido");
require_once 'checa.php';

    $usur = $pdo->prepare($_SESSION["pedsql"]);
    $usur->execute();
    $usua = $usur->fetch(PDO::FETCH_ASSOC);
	$codi = $usua['codi'];
	$nome = $usua['nome'];
	$raza = $usua["raza"];
	$ende = $usua["ende"];
	$bair = $usua["bair"];
	$cida = $usua["cida"];
	$uf = $usua["uf"];
	$cep = $usua["cep"];
	$cnpj = $usua["cnpj"];
	$iest = $usua["iest"];
	$tel1 = $usua["tel1"];
 	$emai = $usua["emai"];
 	$cont = $usua["cont"];
    $vend = $usua["vend"];
	$arte = $_SESSION["arte"];
	
	$vendedora = $pdo->prepare("SELECT * FROM cadvendedora WHERE nome = '".$vend."'");
    $vendedora->execute();
    $vendem = $vendedora->fetch(PDO::FETCH_ASSOC);
	$vema = $vendem['emai'];
	
	
	
?>	


<form enctype="multipart/form-data" action="print_pedido_bobina.php" method="post" class="container-fluid">
  <table class="container-fluid">
  
  <td nowrap=true><h4>Vendedora:</h4></td>
  <td colspan="5"><input type="text" name="vexb" id="vexb" class="form-control" style="width:100%" value="<?php echo $vend?> - <?php echo $vema?>" readonly required></td></td>
  <td><h4>Data:</h4></td>
  <td><input type="date" name="data" class="form-control" required></td>
  </tr>
  
   
  <tr>
  <td nowrap=true><h4>Cód. do Cliente:</h4></td>
  <td><input type="text" name="ccod" id="ccod" class="form-control" style="width:100%" value="<?php echo $codi ?>" readonly required></td>
  
  </tr>

  <tr>
  <td nowrap=true><h4>Razão Social:</h4></td>
  <td colspan="3"><input type="text" name="craz" id="craz" class="form-control" style="width:100%" value="<?php echo $raza ?>" readonly required></td>
  <td nowrap=true><h4>Nome Fantasia:</h4></td>
  <td colspan="8"><input type="text" name="cnom" id="cnom" class="form-control" style="width:100%" value="<?php echo $nome ?>" readonly required></td>
  </tr>
  
  <tr>
  <td><h4>Endereço:</h4></td>
  <td colspan="2"><input type="text" name="cend" id="cend" class="form-control" style="width:100%" value="<?php echo $ende ?>" readonly required></td>
  <td><h4>Bairro:</h4></td>
  <td colspan="8"><input type="text" name="cbai" id="cbai" class="form-control" style="width:100%" value="<?php echo $bair ?>" readonly required></td>
  </tr>
  
  <tr>
  <td><h4>Cidade</h4></td>
  <td colspan="1"><input type="text" name="ccid" id="ccid" class="form-control" style="width:100%" value="<?php echo $cida ?>" readonly required></td>
  <td><h4>Estado</h4></td>
  <td colspan="1"><input type="text" name="cuf" id="cuf" class="form-control" style="width:100%" value="<?php echo $uf ?>" readonly required></td>
  <td><h4>Cep</h4></td>
  <td colspan="8"><input type="text" name="ccep" class="form-control" style="width:100%" value="<?php echo $cep ?>" readonly required></td>	
  </tr>
  
  <tr>
  <td nowrap=true><h4>CNPJ / CPF</h4></td>
  <td colspan="2"><input type="text" name="ccnp" class="form-control" style="width:100%" value="<?php echo $cnpj ?>" readonly required></td>
  <td nowrap=true><h4>Insc. Estadual</h4></td>
  <td colspan="8"><input type="text" name="cies" class="form-control" style="width:100%" value="<?php echo $iest ?>" readonly required></td>
  </tr>
  
  <tr>
  <td><h4>Telefone 1</h4></td>
  <td colspan="1"><input type="text" name="cte1" class="form-control" style="width:100%" value="<?php echo $tel1 ?>" readonly required></td>
  <td><h4>E-mail</h4></td>
  <td colspan="10"><input type="text" name="cema" class="form-control" style="width:100%" value="<?php echo $emai ?>" readonly required></td>
  <td><h4>Contato</h4></td>
  <td colspan="10"><input type="text" name="ccon" class="form-control" style="width:100%" value="<?php echo $cont ?>" readonly required></td>
  </tr>
  
  <tr>
  <td colspan="10"><h1>Bobinas</h1></td>
  </tr>
  
  <tr>
  <td><h4>Bobina</h4></td>
  <td><select name="bobi" id="bobi" required> 
  <option value="">Selecione o Produto</option>
  <?php
    $bobi = $pdo->prepare("SELECT * FROM cadbobina");
    $bobi->execute();
    while($prod = $bobi->fetch(PDO::FETCH_ASSOC)){
    echo '<option value="'.$prod['codi'].'">'.$prod['codi'].'</option>';
    }
  ?></select></td>
  <td nowrap=true><h4>Nº de Vias</h4></td>
  <td><input type="text" name="bvia" class="form-control" style="width:100%" required></td>
  <td nowrap=true><h4>Tipo de Papel</h4></td>
  <td><input type="text" name="bpap" class="form-control" required></td>
  </tr>
  
  <tr>
  <td><h4>Impressão</h4></td>
  <td><input type="text" name="loca" class="form-control" required></td>
  <td nowrap=true><h4>Nº de Cores</h4></td>
  <td><input type="text" name="nume" class="form-control" required></td>
  <td><h4>Cores</h4></td>
  <td><input type="text" name="core" class="form-control" style="width:100%" required></td>
  </tr>
  
  <tr>
  <td nowrap=true><h4>Tipo de Arte</h4></td>
  <td><input type="text" name="arte" class="form-control" style="width:100%" required></td>
  <td><h4>Quantidade</h4></td>
  <td><input type="text" name="qtcx" class="form-control" style="width:100%" required></td>
  <td nowrap=true><h4>Valor Unitário</h4></td>
  <td><input type="tel" name="valu" class="form-control" style="width:100%" pattern="([0-9]{1,3}\.)?[0-9]{1,3},[0-9]{2}$" required></td>
  </tr>
  
  <tr>
  <td><h4>Pagamento</h4></td>
  <td><input type="text" name="praz" class="form-control" style="width:100%" required></td>
  <td><h4>Transporte</h4></td>
  <td colspan="7"><input type="text" name="tran" class="form-control" style="width:100%" required></td>
  </tr>	
  
  <tr>
  <td><h4>Observações</h4></td>
  <td colspan="9"><input type="text" name="obse" class="form-control" style="width:100%"></td>
  </tr>
  
  <tr>
  <td><h4>Imagem</h4></td>
  <td><a href="<?php echo $arte ?>"><img id="aimg" name="aimg" src="<?php echo $arte ?>" width="200px"></a></td>
  <td><input type="hidden" name="aimg" value="<?php echo $arte ?>"</td>
  </tr>
  
  <tr>
  <td><h4><button type="submit" class="btn">Salvar Pedido</button></h4></td>
  <td><h4><button type="reset" class="btn">Limpar Pedido</button></h4></td>
  </tr>
  </table>

  </form>


  
</body>

</html>