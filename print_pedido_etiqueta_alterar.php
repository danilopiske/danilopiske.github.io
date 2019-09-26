<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="">
<title>Pedido de Etiquetas</title>
<link rel="stylesheet" href="estilo.css" type="text/css" media="all">
</head>

<body>
<?php
session_start("pedido");
require_once 'checa.php';


	if ($_POST) {  
	include("./includes/conexao.php");
			$pedi = $_POST["pedi"];
			$data = $_POST["data"];
			$vexb = $_POST["vexb"];
			$ccod = $_POST["ccod"];
			$cnom = $_POST["cnom"];
			$craz = $_POST["craz"];
			$cend = $_POST["cend"];
			$cbai = $_POST["cbai"];
			$ccid = $_POST["ccid"];
			$cuf = $_POST["cuf"];
			$ccep = $_POST["ccep"];
			$ccnp = $_POST["ccnp"];
			$cies = $_POST["cies"];
			$cte1 = $_POST["cte1"];
			$cema = $_POST["cema"];
			$ccon = $_POST["ccon"];
			$etiq = $_POST["etiq"];
			$ebal = $_POST["ebal"];
			$epap = $_POST["epap"];
			$nume = $_POST["nume"];
			$core = $_POST["core"];
			$loca = $_POST["loca"];
			$qtrl = $_POST["qtrl"];
			$valu = $_POST["valu"];
			$valu = str_replace(",",".",$valu);
			$valt = str_replace(",",".",$qtrl)*str_replace(",",".",$valu);
			$praz = $_POST["praz"];
			$tran = $_POST["tran"];
			$arte = $_POST["arte"];
			$obse = $_POST["obse"];
			$aimg = $_POST["aimg"];
			if (is_float($valt)){
			number_format($valt,2);}
						
			
			try { 
                     $conecta = new PDO("mysql:host=localhost:3308;dbname=baseproducao","root","piske"); //istancia a classe PDO
			         $comandoSQL = "UPDATE pedetiqueta SET `vexb` = '$vexb', `ccod` = '$ccod', `cnom` = '$cnom', `craz` = '$craz', `cend` = '$cend', `cbai` = '$cbai', `ccid` = '$ccid', `cuf` = '$cuf', `ccep` = '$ccep', `ccnp` = '$ccnp', `cies` = '$cies', `cte1` = '$cte1' , `cema` = '$cema', `ccon` = '$ccon', `etiq` = '$etiq', `ebal` = '$ebal', `epap` = '$epap', `nume` = '$nume', `core` = '$core', `loca` = '$loca', `qtrl` = '$qtrl', `valu` = '$valu', `valt` = '$valt', `praz` = '$praz', `tran` = '$tran', `arte` = '$arte', `obse` = '$obse', `aimg` = '$aimg' WHERE `pedetiqueta`.`pedi` = $pedi";
			         
					 $grava = $conecta->prepare($comandoSQL); //testa o comando SQL
			         $grava->execute(array()); 	                                        
                     echo '<br/><div class="alert alert-success" role="alert">
                           </div>';
						   
		          } catch(PDOException $e) { // caso retorne erro
                     
                     echo '<br/><div class="alert alert-success" role="alert">
                                Erro ' . $e->getMessage() . 
                          '</div>';
		          }
	}

?>
<h3 align="center"><a href="index_vendedoras.php"><img src="images/logo.jpg" alt="" height="30"></a><strong>Pedido de Etiquetas (Aperte Crtl P) para imprimir o pedido </strong></h3>
<h5 nowrap=true><strong>Data:</strong><?php echo $data; ?></h5><img name="aimg" src="<?php echo $aimg ?>" width='250px' align="right"/>
<h5 nowrap=true><strong>Vendedora:</strong><?php echo $vexb; ?></h5>
<h5 nowrap=true><strong>Nome Fantasia:</strong><?php echo $cnom; ?></h5>
<h5 nowrap=true><strong>Razão Social:</strong><?php echo $craz; ?></h5>
<h5 nowrap=true><strong>Endereço:</strong><?php echo $cend; ?></h5>
<h5 nowrap=true><strong>Bairro:</strong><?php echo $cbai; ?></h5>
<h5 nowrap=true><strong>Cidade:</strong><?php echo $ccid; ?></h5>
<h5 nowrap=true><strong>Estado:</strong><?php echo $cuf; ?></h5>
<h5 nowrap=true><strong>Cep:</strong><?php echo $ccep; ?></h5>
<h5 nowrap=true><strong>CNPJ / CPF:</strong><?php echo $ccnp; ?></h5>
<h5 nowrap=true><strong>Insc. Estadual:</strong><?php echo $cies; ?></h5>
<h5 nowrap=true><strong>Telefone 1:</strong><?php echo $cte1; ?></h5>
<h5 nowrap=true><strong>E-mail:</strong><?php echo $cema; ?></h5>
<h5 nowrap=true><strong>Contato:</strong><?php echo $ccon; ?></h5>
<h3>Etiquetas</h3>
<h5 nowrap=true><strong>Etiqueta:</strong><?php echo $etiq; ?></h5>
<h5 nowrap=true><strong>Balança:</strong><?php echo $ebal; ?></h5>
<h5 nowrap=true><strong>Tipo de Papel:</strong><?php echo $epap; ?></h5>
<h5 nowrap=true><strong>Local da Impressão:</strong><?php echo $loca; ?></h5>
<h5 nowrap=true><strong>Nº de Cores:</strong><?php echo $nume; ?></h5>
<h5 nowrap=true><strong>Cores:</strong><?php echo $core; ?></h5><img name="aimg" src="images/carimbo.jpg" width="200" align="right"/>
<h5 nowrap=true><strong>Tipo de Arte:</strong><?php echo $arte; ?></h5>
<h5 nowrap=true><strong>Quant. de Rolos:</strong><?php echo $qtrl; ?></h5>
<h5 nowrap=true><strong>Valor Unitário: R$ </strong><?php echo $valu; ?></h5>
<h5 nowrap=true><strong>Valor Total: R$ </strong><?php echo $valt; ?></h5>
<h5 nowrap=true><strong>Prazo de Pagamento:</strong></h5><h5 nowrap=true><?php echo $praz; ?></h5>
<h5 nowrap=true><strong>Transporte:</strong></h5><h5 nowrap=true><?php echo $tran; ?></h5>
<h5 nowrap=true><strong>Observações:</strong></h5><h5 nowrap=true><?php echo $obse; ?></h5>
<h5 nowrap=true><strong>ARTE - FAVOR CONFERIR E SÓ ASSINAR SE ESTIVER DE ACORDO COM A MESMA</strong></h5>
<h5 nowrap=true><strong>PELO PRESENTE DOCUMENTO, AUTORIZO A EMPRESA LUNARDI IND.COM.LTDA LTDA A CONFECÇÃO</strong></h5>
<h5 nowrap=true><strong>DESSE PRODUTO CONFORME AS ESPECIFICAÇÕES ACIMA, E DECLARO QUE ACEITO O PRESENTE </strong></h5>
<h5 nowrap=true><strong>PEDIDO COM PROVÁVEL VARIAÇÃO DE + OU - 10% NA QUANTIDADE DE CAIXAS SOLICITADA.</strong></h5>
<h5 nowrap=true> </br></h5>
<h5 nowrap=true><strong>VALIDADE DESSA PROPOSTA: 03 DIAS</strong></h5>
<h5 nowrap=true> </br></h5>
<h5 nowrap=true><strong>DATA DESSA PROPOSTA: ___________________________</strong></h5>
<h5 nowrap=true> </br></h5>
<h5 nowrap=true><strong>DE ACORDO: _____________________________________</strong></h5>
<h5 nowrap=true> </br></h5>
<h5 nowrap=true><strong>IDENTIFICAÇÃO DA ASSINATURA: ___________________</strong></h5>



</body>
</html>