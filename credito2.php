<?php
$vend = $_POST["vend"];
$clie = $_POST["clie"];
$cred = $_POST["cred"];
$novo = $_POST["novo"];
$ativ = $_POST["ativ"];
$tipo = $_POST["tipo"];
$anof = $_POST["anof"];
$quap = $_POST["quap"];
$valo = $_POST["valo"];
$tipp = $_POST["tipp"];
$anue = $_POST["anue"];
$medc = $_POST["medc"];
$quav = $_POST["quav"];
$quaz = $_POST["quaz"];
$paga = $_POST["paga"];
$for1 = $_POST["for1"];
$cld1 = $_POST["cld1"];
$ult1 = $_POST["ult1"];
$val1 = $_POST["val1"];
$mai1 = $_POST["mai1"];
$fpg1 = $_POST["fpg1"];
$pon1 = $_POST["pon1"];
$for2 = $_POST["for2"];
$cld2 = $_POST["cld2"];
$ult2 = $_POST["ult2"];
$val2 = $_POST["val2"];
$mai2 = $_POST["mai2"];
$fpg2 = $_POST["fpg2"];
$pon2 = $_POST["pon2"];
$vala = $_POST["vala"];
$fpcr = $_POST["fpcr"];
$obse = $_POST["obse"];


switch($vend) {
    case "Jussara":
        $evend = "supremaprint2@gmail.com";
        break;
    case "Camila":
        $evend = "supremaprint3@gmail.com";
        break;
    case "Sabrina":
        $evend = "supremavendas1@gmail.com";
        break;
	case "Renata":
        $evend = "supremavendas2@gmail.com";
        break;
    case "Fernanda":
        $evend = "supremavendas3@gmail.com";
        break;
		
}


$to = "imololunardi@gmail.com;".$evend."";
$subject = "Crédito: ".$vend." - ".$clie." - ".$cred." - ".date("d.m.y")."";
$headers = "From: ".$evend."\r\n" .
   "Reply-To: ".$evend.";supremafaturamento@gmail.com";
	   
				if ($novo=="Cliente Novo") { //1ª Compra
					$mesg = "Cliente gostaria de realizar primeira compra a prazo conosco, no valor de R$ ".$vala.", Com a condição de pagamento ".$fpcr."\n\n";}
				else {
					$mesg = "Cliente tem uma média de compra conosco de: R$ ".$medc." e gostaria de comprar R$".$vala."\n\n".
							"Já realizou ".$quav." Compras à vista conosco.\n\n";}
				            
				if ($quaz>0){
					$mesa = "Já realizou ".$quaz." Compras à prazo.\n".
							"Paga em dia: ".$paga."";}
				else{
					$mesa = "";}
				
				if ($for1 != ""){
					$msf1 = "Referências Comerciais \n\n".
							"Fornecedor: ".$for1." Cliente lá desde: ".$cld1.
							"\nTendo comprado pela última vez no dia: ".$ult1.
							", tendo com eles a Vencer o Valor de R$ ".$val1."\n\n".
							"Tendo tido como seu maior acumulo o valor R$ ".$mai1."\n\n".
							"E pago geralmente na condição de pagamento: ".$fpg1."".
							" Observações: ".$pon1."";}
				else {
					$msf1 = "";}	
				
				if ($for2 != ""){
					$msf2 = "Referências Comerciais \n\n".
							"Fornecedor: ".$for2." Cliente lá desde: ".$cld2.
							"\nTendo comprado pela última vez no dia: ".$ult2.
							", tendo com eles a Vencer o Valor de R$ ".$val2."\n\n".
							"Tendo tido como seu maior acumulo o valor R$ ".$mai2."\n\n".
							"E pago geralmente na condição de pagamento: ".$fpg2."".
							" Observações: ".$pon2."";}
				else {
					$msf2 = "";}				
				
				
				if ($quap>0){ //Tem Protestos
					$message = "Cliente ".$clie.", fundado em ".$anof."\n".
					"Tem ".$quap." Protestos, Total: R$ ".$valo."".
					" Os protestos são do tipo: ".$tipp." e ".$anue."\n\n".
					"".$mesg."".
					"".$mesa."\n\n".
					"".$msf1."\n\n".
					"".$msf2."\n\n".
					"Observações do cliente: ".$obse."\n\n";					}
				else {
					$message = "Cliente ".$clie.", fundado em ".$anof."\n".
					"Não tem protestos\n\n".
					"".$mesg."".
					"".$mesa."\n\n".
					"".$msf1."\n\n".
					"".$msf2."\n\n".
				"Observações do cliente: ".$obse."\n\n";
				}
				
					
				
			   
function logMsg( $msg, $level = 'info', $file = 'credito.log' )
{
    // variável que vai armazenar o nível do log (INFO, WARNING ou ERROR)
    $levelStr = '';

    // verifica o nível do log
    switch ( $level )
    {
        case 'info':
            // nível de informação
            $levelStr = 'INFO';
            break;

        case 'warning':
            // nível de aviso
            $levelStr = 'WARNING';
            break;

        case 'error':
            // nível de erro
            $levelStr = 'ERROR';
            break;
    }

    // data atual
    $date = date( 'Y-m-d H:i:s' );

    // formata a mensagem do log
    // 1o: data atual
    // 2o: nível da mensagem (INFO, WARNING ou ERROR)
    // 3o: a mensagem propriamente dita
    // 4o: uma quebra de linha
    $msg = sprintf( "[%s] [%s]: %s%s", $date, $levelStr, $msg, PHP_EOL );

    // escreve o log no arquivo
    // é necessário usar FILE_APPEND para que a mensagem seja escrita no final do arquivo, preservando o conteúdo antigo do arquivo
    file_put_contents( $file, $msg, FILE_APPEND );
}				
 
   
   
if(mail($to, $subject, $message, $headers)){
	echo "<h1>Avaliação de Crédito Enviada com Sucesso</h1>";
	echo "\n\n\n\n";
	echo '<strong><a href="credito.php"><img src="images/logo.jpg" align="center" alt="" width="166" height="112"></a>';
	logMsg( "E-mail Enviado com Sucesso... - ".$message."" ); }
else {
echo "<h1>Deu algum erro</h1>";
logMsg( "Deu o seguinte Erro:... - ".$message."" );}

?>