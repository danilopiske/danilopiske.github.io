<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulário de Cotação</title>
<link rel="stylesheet" href="estilo.css" type="text/css" media="all">
</head>
<body>


<?php
	//18-04-26
	//autor: danilo barbosa
	//recursos: iterador, scandir, manipulacao de arrays e strings, foreach
	//essa programacao responde a um formulario chamado consulta.php

	
$cliente = strtoupper($_POST["cliente"]); //recebe cliente do formulario
$cont = 0; //cria um controle de instancias encontradas
$dirPath = "F:\Administrativo\SERASA\\".$_POST["vend"].""; //define pasta dos arquivos
$files = scandir($dirPath); //escaneia e armazena arquivos do diretorio em um array
foreach ($files as $file) { //le cada instancia do array
    if (is_numeric(strpos($file,$cliente)) == 1) { //testa a ocorrencia do trecho digitado
    echo '<a href="teste.php?arquivo=\\\192.168.0.200\SERASA\\'.$_POST["vend"]."\\".$file.'">'.$file.'</a><br/><br/>';
	$cont++;
	// printa a instancia do array e incrementa o contador
	}
}
if ($cont == 0){ 
echo "Cliente Não Encontrado com Consulta Recente"; // testa o contador e imprime mensagem de erro
}
?>
<h1> </h1>
<h1> </h1>
<h3>Nome digitado: <?php echo $cliente ?></h3>
<h1> </h1>
<h1> </h1>

<strong><a href="<?php echo "consulta_".strtolower($_POST["vend"]).".php" ?>"><img src="images/logo.jpg" align="center" alt="" width="166" height="112"></a>
</body>
</html>
