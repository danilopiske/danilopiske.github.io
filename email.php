<?php
$quan = $_POST["quan"];
$vend = $_POST["vend"];
$clie = $_POST["clie"];
$novo = $_POST["novo"];
$ativ = $_POST["ativ"];
$tipo = $_POST["tipo"];
$lar = $_POST["lar"];
$met = $_POST["met"];
$pap = $_POST["pap"];
$cor = $_POST["cor"];
$qua = $_POST["qua"];
$prf = $_POST["prf"];
$con = $_POST["con"];
$prc = $_POST["prc"];
$tab = $_POST["tab"];
$ulp = $_POST["ulp"];
$dup = $_POST["dup"];
$obs = $_POST["obs"];




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
$subject = "Cotação ".$vend." - ".$clie." - ".date("d.m.y")."";
$headers = "From: ".$evend."\r\n" .
				
				
			   for ($i = 0; $i < $quan; $i++){
				$prd = $i+1;
				$mess[$i] = "Produto ".$prd."\n\n".   
			    $lar[$i]."mm - ".
				$met[$i]."mts\n\n".
				$pap[$i]."\n\n".
		  	    $cor[$i]."\n\n".
		  	    $qua[$i]." \n\n".
				'Preço da Nossa Tabela: R$'.$tab[$i]."\n\n".
				'Preço da Última Compra: R$'.$ulp[$i]." - ".
				'No Dia: '.$dup[$i]."\n\n".
				'Preço que fiz: R$'.$prf[$i]."\n\n".
			    'Preço que ele tem no Concorrente '.$con[$i].": R$".$prc[$i]."\n\n".
			    'Observações: '.$obs[$i]."\n\n\n\n";}
			   
			   
				
 switch ($quan){
			   case 1:
					$message = 'Vendedora: '.$vend."\n".
					'Cliente: '.$clie."\n".
					''.$novo."\n\n".
					''.$ativ."\n\n".
					''.$tipo."\n\n".$mess[0].'';
					break;
			   case 2:
					$message = 'Vendedora: '.$vend."\n".
					'Cliente: '.$clie."\n".
					''.$novo."\n\n".
					''.$ativ."\n\n".
					''.$tipo."\n\n".$mess[0].''.$mess[1].'';
					break;
			   case 3:
					$message = 'Vendedora: '.$vend."\n".
					'Cliente: '.$clie."\n".
					''.$novo."\n\n".
					''.$ativ."\n\n".
					''.$tipo."\n\n".$mess[0].''.$mess[1].''.$mess[2].'';
					break;
			   case 4:
					$message = 'Vendedora: '.$vend."\n".
					'Cliente: '.$clie."\n".
					''.$novo."\n\n".
					''.$ativ."\n\n".
					''.$tipo."\n\n".$mess[0].''.$mess[1].''.$mess[2].''.$mess[3].'';
					break;
			   case 5:
					$message = 'Vendedora: '.$vend."\n".
					'Cliente: '.$clie."\n".
					''.$novo."\n\n".
					''.$ativ."\n\n".
					''.$tipo."\n\n".$mess[0].''.$mess[1].''.$mess[2].''.$mess[3].''.$mess[4].'';
					break;
			   case 6:
					$message = 'Vendedora: '.$vend."\n".
					'Cliente: '.$clie."\n".
					''.$novo."\n\n".
					''.$ativ."\n\n".
					''.$tipo."\n\n".$mess[0].''.$mess[1].''.$mess[2].''.$mess[3].''.$mess[4].''.$mess[5].'';
					break;
			   case 7:
					$message = 'Vendedora: '.$vend."\n".
					'Cliente: '.$clie."\n".
					''.$novo."\n\n".
					''.$ativ."\n\n".
					''.$tipo."\n\n".$mess[0].''.$mess[1].''.$mess[2].''.$mess[3].''.$mess[4].''.$mess[5].''.$mess[6].'';
					break;
			   case 8:
					$message = 'Vendedora: '.$vend."\n".
					'Cliente: '.$clie."\n".
					''.$novo."\n\n".
					''.$ativ."\n\n".
					''.$tipo."\n\n".$mess[0].''.$mess[1].''.$mess[2].''.$mess[3].''.$mess[4].''.$mess[5].''.$mess[6].''.$mess[7].'';
					break;
			   case 9:
					$message = 'Vendedora: '.$vend."\n".
					'Cliente: '.$clie."\n".
					''.$novo."\n\n".
					''.$ativ."\n\n".
					''.$tipo."\n\n".$mess[0].''.$mess[1].''.$mess[2].''.$mess[3].''.$mess[4].''.$mess[5].''.$mess[6].''.$mess[7].''.$mess[8].'';
					break;
			   case 10:
					$message = 'Vendedora: '.$vend."\n".
					'Cliente: '.$clie."\n".
					''.$novo."\n\n".
					''.$ativ."\n\n".
					''.$tipo."\n\n".$mess[0].''.$mess[1].''.$mess[2].''.$mess[3].''.$mess[4].''.$mess[5].''.$mess[6].''.$mess[7].''.$mess[8].''.$mess[9].'';
					break;
		   }
   
   
function logMsg( $msg, $level = 'info', $file = 'cotacao.log' )
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
	echo "<h1>Cotação Enviada com Sucesso</h1>";
	echo "\n\n\n\n";
	echo '<strong><a href="cotacao.php"><img src="images/logo.jpg" align="center" alt="" width="166" height="112"></a>';
   logMsg( "E-mail Enviado com Sucesso... - ".$message."" ); }
else {
echo "<h1>Deu algum erro</h1>";
logMsg( "Deu o seguinte Erro:... - ".$message."" ); }
?>