<?php
        include("./includes/conexao2.php");
		
				$comandoSQL = "SELECT * FROM cadastrosprodutos WHERE cod_pr1 LIKE '79%'";
				$comando = $pdo->prepare($comandoSQL);
				$comando->execute();
				while($teste = $comando->fetch(PDO::FETCH_ASSOC)){
				echo ''.$teste['nom_pr1'].'';
				}
	
		
		
	
	try { 
                     $conecta = new PDO("mysql:host=localhost:3306;dbname=bd_suprema","root","suprema77"); //istancia a classe PDO
			         $grava = $conecta->prepare($comandoSQL); //testa o comando SQL
			         $grava->execute(array()); 	                                        
					 } catch(PDOException $e) { // caso retorne erro
                     
                     echo '<br/><div class="alert alert-success" role="alert">
                                Erro ao inserir dados na tabela ' . $test . ' - ' . $e->getMessage() . 
                          '</div>';
		          }
	?>
	
	