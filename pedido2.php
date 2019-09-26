<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="">
<title>P.E.D.I.D.O</title>
<link rel="stylesheet" href="estilo.css" type="text/css" media="screen">

</head>

<body>
<?php
include("./includes/conexao.php");
session_start("pedido");
require_once 'checa.php';
?>
<h2><a href="index_vendedor.php><img src="images/logo.jpg" alt="" width="166" height="112"></a><strong>PEDIDOS</strong></h2>

<form enctype="multipart/form-data" action="procpedido.php" method="post" class="container-fluid">
  <table class="container-fluid">
  <tr>
  <td><h4>Cliente:</h4></td>
  <td><select name="clie" id="clie"> 
  <option value="">Selecione o Cliente</option>
  <?php
    $cliente = $pdo->prepare($_SESSION["pedsql"]);
    $cliente->execute();
    while($proccliente = $cliente->fetch(PDO::FETCH_ASSOC)){
    echo '<option value="'.$proccliente['codi'].'">'.$proccliente['nome']." - ".$proccliente['cnpj']." - ".$proccliente['codi'].'</option>';
    }
  ?></select></td>
  </tr>
  <tr>
  <td><input type="hidden" name="test" class="form-control" value="pedido2" required></td>
  </tr>
  
  <tr>
  <td><h4>Arte:</h4></td>
  <td><select name="arte" id="arte">
  <option value="">Selecione a Arte</option>
	<?php
    $dirname = "artes/".$_SESSION["user"]."";
    $cliente = strtoupper($_SESSION["clie"]); //recebe cliente do formulario
$cont = 0; //cria um controle de instancias encontradas
//$dirPath = ".."; //define pasta dos arquivos
$files = scandir($dirname); //escaneia e armazena arquivos do diretorio em um array
foreach ($files as $file) { //le cada instancia do array
    if ((is_numeric(strpos($file,$cliente)) == 1) && (is_numeric(strpos($file,"jpg")) == 1))  { //testa a ocorrencia do trecho digitado
    echo '<option value="artes/'.$_SESSION["user"].'/'.$file.'">'.$file.'</option>';
	$cont++;
	// printa a instancia do array e incrementa o contador
	}
}
     ?> 
	</select></td>
  
  </tr>
  <tr>
  <td><h4><button type="submit" name="bobina" id="bobina" class="btn">B.O.B.I.N.A.S</button></h4></td>
  </tr>
  <tr>
  <td><h4><button type="submit" name="etiqueta" id="etiqueta" class="btn">E.T.I.Q.U.E.T.A.S</button></h4></td>
  </tr>
  </table>
  

  </form>
  
</body>

</html>