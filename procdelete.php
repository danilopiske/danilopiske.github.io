<?php
        include("./includes/conexao.php");
		session_start("pedido");
		
		
		
		if ($_POST["test"]=="pedbobina3deletar") {
				$pedsql = "DELETE FROM pedbobina WHERE pedi = '".$_SESSION["pedi"]."'";
				echo $pedsql;
				$pedido = $pdo->prepare($pedsql);
				$pedido->execute();
				header("Location: ./index_vendedoras.php");
		}
		
		if ($_POST["test"]=="pedetiqueta3deletar") {
				$pedsql = "DELETE FROM pedetiqueta WHERE pedi = '".$_SESSION["pedi"]."'";
				echo $pedsql;
				$pedido = $pdo->prepare($pedsql);
				$pedido->execute();
				header("Location: ./index_vendedoras.php");
		}
		
		
		
    
		
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	?>
	