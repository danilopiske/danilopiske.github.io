<?php
        include("./includes/conexao.php");
		
		if ($_POST["test"]=="cadbobina") {        
            $test = $_POST["test"];
			$codi = $_POST["codi"];
			
			$comandoSQL = "INSERT INTO ".$test." (codi) VALUES ('$codi')";
			header("Location: ./index_administrativo.php");			
		}

		if ($_POST["test"]=="cadetiqueta") {        
            $test = $_POST["test"];
			$codi = $_POST["codi"];
			
			$comandoSQL = "INSERT INTO ".$test." (codi) VALUES ('$codi')";
			header("Location: ./index_administrativo.php");
		} 
    
		if ($_POST["test"]=="cadcliente") {        
            $test = $_POST["test"];
            $codi = $_POST["codi"];
			$nome = $_POST["nome"];
			$raza = $_POST["raza"];
			$ende = $_POST["ende"];
			$bair = $_POST["bair"];
			$cida = $_POST["cida"];
			$uf = $_POST["uf"];
			$cep = $_POST["cep"];
			$cnpj = $_POST["cnpj"];
			$iest = $_POST["iest"];
			$cont = $_POST["cont"];
			$tel1 = $_POST["tel1"];
			$emai = $_POST["emai"];
			$vend = $_POST["vend"];
			
			$comandoSQL = "INSERT INTO ".$test." (codi, nome, raza, ende, bair, cida, uf, cep, cnpj, iest, cont, tel1, emai, vend) VALUES ('$codi','$nome','$raza','$ende','$bair','$cida','$uf','$cep','$cnpj','$iest','$cont','$tel1','$emai','$vend')";
			echo $comandoSQL;
			header("Location: ./index_administrativo.php");
		} 
		
		if ($_POST["test"]=="cadvendedora") {        
            $test = $_POST["test"];
            $nome = $_POST["nome"];
			$emai = $_POST["emai"];
						
			$comandoSQL = "INSERT INTO ".$test." (nome, emai) VALUES ('$nome','$emai')";
			header("Location: ./index_administrativo.php");
		} 
		
		if ($_POST["test"]=="altbobina") {        
            $test = $_POST["test"];
			$codi = $_POST["codi"];
			$dado = $_POST["clie"];
			
			
			$comandoSQL = "UPDATE cadbobina SET `codi` = '$codi' WHERE `cadbobina`.`cont` = '$dado'";
			echo $comandoSQL;
			header("Location: ./index_administrativo.php");			
		}

		if ($_POST["test"]=="altetiqueta") {        
            $test = $_POST["test"];
			$codi = $_POST["codi"];
			$dado = $_POST["clie"];
			
			$comandoSQL = "UPDATE cadetiqueta SET `codi` = '$codi' WHERE `cadetiqueta`.`cont` = '$dado'";
			echo $comandoSQL;
			header("Location: ./index_administrativo.php");
		} 
    
		if ($_POST["test"]=="altcliente") {        
            $dado = $_POST["clie"];
			$test = $_POST["test"];
            $codi = $_POST["codi"];
			$nome = $_POST["nome"];
			$raza = $_POST["raza"];
			$ende = $_POST["ende"];
			$bair = $_POST["bair"];
			$cida = $_POST["cida"];
			$uf = $_POST["uf"];
			$cep = $_POST["cep"];
			$cnpj = $_POST["cnpj"];
			$iest = $_POST["iest"];
			$cont = $_POST["cont"];
			$tel1 = $_POST["tel1"];
			$emai = $_POST["emai"];
			$vend = $_POST["vend"];
			
			$comandoSQL = "UPDATE cadcliente SET `codi` = '$codi', `nome` = '$nome', `raza` = '$raza', `ende` = '$ende', `bair` = '$bair', `cida` = '$cida', `uf` = '$uf', `cep` = '$cep', `cnpj` = '$cnpj', `iest` = ' $iest', `cont` = '$cont', `tel1` = '$tel1', `emai` = '$emai', `vend` = '$vend'  WHERE `cadcliente`.`codi` = '$dado'";
			echo $comandoSQL;
			header("Location: ./index_administrativo.php");
		} 
		
		if ($_POST["test"]=="altvendedora") {        
            $dado = $_POST["clie"];
			$test = $_POST["test"];
            $nome = $_POST["nome"];
			$emai = $_POST["emai"];
						
			$comandoSQL = "UPDATE cadvendedora SET `nome` = '$nome', `emai` = '$emai'  WHERE `cadvendedora`.`codi` = '$dado'";
			echo $comandoSQL;
			header("Location: ./index_administrativo.php");
		} 
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		if ($_POST["test"]=="cadusers") {        
            $test = $_POST["test"];
            $user = $_POST["user"];
			$pass = $_POST["pass"];
			$tipo = $_POST["tipo"];
						
			$comandoSQL = "INSERT INTO ".$test." (user, pass, tipo) VALUES ('$user','$pass','$tipo')";
			header("Location: ./index_administrativo.php");
		} 
		
		if ($_POST["test"]=="login") { 
			session_start("pedido");		
            $test = $_POST["test"];
            $user = $_POST["user"];
			$pass = $_POST["pass"];
			$tipo = $_POST["tipo"];
			$_SESSION["user"] = $user;
												
			if ($tipo == 'admin'){
				$comandoSQL = "SELECT user FROM cadusers WHERE user = '$user' AND pass = '$pass' AND tipo = '$tipo'";
				$comando = $pdo->prepare($comandoSQL);
				$comando->execute();
				$comandoSQLS = $comando->fetchAll(PDO::FETCH_ASSOC);
					if (count($comandoSQLS) > 0){
						
						$_SESSION["isloggedin"] = 1;
						$_SESSION["isadmin"] = 1;
						header("Location: ./index_administrativo.php");
					}
					else {
						
						$_SESSION["isloggedin"] = 0;
						header("Location: ./index.php");
					}
			}
			else{
				$comandoSQL = "SELECT user FROM cadusers WHERE user = '$user' AND pass = '$pass' AND tipo = '$tipo'";
				$comando = $pdo->prepare($comandoSQL);
				$comando->execute();
				$comandoSQLS = $comando->fetchAll(PDO::FETCH_ASSOC);
					if (count($comandoSQLS) > 0){
						
						$_SESSION["isloggedin"] = 1;
						
						header("Location: ./index_vendedoras.php");
					}
					else {
						$_SESSION["isloggedin"] = 0;
						header("Location: ./index.php");
					}
			}
		}
			
		
		
		
		
		
		 
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	try { 
                     $conecta = new PDO("mysql:host=localhost:3308;dbname=baseproducao","root","piske"); //istancia a classe PDO
			         $grava = $conecta->prepare($comandoSQL); //testa o comando SQL
			         $grava->execute(array()); 	                                        
					 } catch(PDOException $e) { // caso retorne erro
                     
                     echo '<br/><div class="alert alert-success" role="alert">
                                Erro ao inserir dados na tabela ' . $test . ' - ' . $e->getMessage() . 
                          '</div>';
		          }
	?>
	
	
	