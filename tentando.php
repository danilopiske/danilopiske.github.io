<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="">
<title>Controle de Clientes</title>
<link rel="stylesheet" href="estilo.css" type="text/css" media="screen">

</head>

<body>
<h2><a><img src="images/logo.jpg" alt="" width="166" height="112"></a><strong>Controle de Clientes</strong></h2>

<?php
include("./includes/conexao.php");
//session_start("pedido");
//require_once 'checa.php';

    $pedsql = "SELECT * FROM `cadcliente` WHERE `vend` = 'CAMILA'";
	$usur = $pdo->prepare($pedsql);
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
	//$arte = $_SESSION["arte"];
	
	$vendedora = $pdo->prepare("SELECT * FROM cadvendedora WHERE nome = '".$vend."'");
    $vendedora->execute();
    $vendem = $vendedora->fetch(PDO::FETCH_ASSOC);
	$vema = $vendem['emai'];
	
	
	
?>	


<form enctype="multipart/form-data" action="print_pedido_bobina.php" method="post" class="container-fluid">
 <form enctype="multipart/form-data" method="post" action="email.php">
  <table class="container-fluid">
  <tr>
  <td colspan="13"><h1>Formulário de Cotação de Preços</h1></td>
  </tr>
  <tr>
  <td><strong>Código</strong></td>
  <td><strong>CNPJ</strong></td>
  <td><strong>Razão Social</strong></td>
  <td><strong>Nome Fantasia</strong></td>
  <td><strong>Entrega</strong></td>
  <td><strong>Região</strong></td>
  <td><strong>Ultima Compra</strong></td>
  <td><strong>Status</strong></td>
  <td><strong>Observações</strong></td>
  <td><strong>Ligar</strong></td>
  <td><strong>Telefone</strong></td>
  <td><strong>Contato</strong></td>
  <td><strong>Cliente</strong></td>
  </tr>
  
  <?php 
	$usur = $pdo->prepare($pedsql);
    $usur->execute();
	$i = 1;
    while($usua = $usur->fetch(PDO::FETCH_ASSOC)){
		$i = $i+1;
    echo '<tr><td>'.$usua['codi'].
		 '</td><td>'.$usua["cnpj"].
		 '</td><td>'.$usua["raza"].
		 '</td><td>'.$usua["nome"].
		 '</td><td>'.$usua["entr"].
		 '</td><td>'.$usua["regi"].
		 '</td><td>'.$usua["ulti"].
		 '</td><td>'.$usua["stat"].
		 '</td><td>'.$usua["obse"].
		 '</td><td>'.$usua["liga"].
		 '</td><td>'.$usua["tele"].
		 '</td><td>'.$usua["cont"].
		 '</td><td>'.$usua["clie"].
		 '</td>';
	
	
	}
	?>
  
  </table>

  </form>


  
</body>

</html>