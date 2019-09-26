<?php
        include("./includes/conexao.php");
		session_start("pedido");
		$pppd = $_POST["pppd"];
		
		
		if ($_POST["test"]=="pedido1") {        
            $clie = $_POST["clie"];
			$pedsql = "SELECT * FROM cadcliente WHERE nome LIKE '%".$clie."%' AND vend LIKE '%".$_SESSION["user"]."%'";
			$_SESSION["pedsql"] = $pedsql;
			$_SESSION["clie"] = $clie;
			echo $pedsql;
			
			header("Location: ./pedido2");			
		}
		
		if ($_POST["test"]=="pedido2") {        
            if (isset($_POST['bobina'])) {
			$_SESSION["arte"] = $_POST["arte"];
			$clie = $_POST["clie"];
			$pedsql = "SELECT * FROM cadcliente WHERE codi = '".$clie."'";
			$_SESSION["pedsql"] = $pedsql;
			header("Location: ./pedbobina3");			
		}
			elseif (isset($_POST['etiqueta'])) {
			$_SESSION["arte"] = $_POST["arte"];
			$clie = $_POST["clie"];
			$pedsql = "SELECT * FROM cadcliente WHERE codi = '".$clie."'";
			$_SESSION["pedsql"] = $pedsql;
			header("Location: ./pedetiqueta3");			
		}
		}
		
		
		if ($_POST["test"]=="admped1") {        
            if (isset($_POST['bobina'])) {
			$clie = $_POST["clie"];
			$pedsql = "SELECT * FROM pedbobina WHERE cnom LIKE '%".$clie."%' AND vexb LIKE '%".$_SESSION["user"]."%'" ;
			$_SESSION["pedsql"] = $pedsql;
			echo $_SESSION["pedsql"];
			header("Location: ./admpedido2bobinas");	
			}
			elseif (isset($_POST['etiqueta'])) {
			$clie = $_POST["clie"];
			$pedsql = "SELECT * FROM pedetiqueta WHERE cnom LIKE '%".$clie."%' AND vexb LIKE '%".$_SESSION["user"]."%'" ;
			$_SESSION["pedsql"] = $pedsql;
			echo $_SESSION["pedsql"];
			header("Location: ./admpedido2etiquetas");	
			}
		}
		
		if ($_POST["test"]=="admpedido2bobinas") {        
            if (isset($_POST['alterar'])) {
				$pedsql = "SELECT * FROM pedbobina WHERE pedi = '".$pppd."'";
				$_SESSION["pedsql"] = $pedsql;
				header("Location: ./pedbobina3alterar");	
        }
		elseif (isset($_POST['deletar'])) {
				$pedsql = "SELECT * FROM pedbobina WHERE pedi = '".$pppd."'";
				$_SESSION["pedsql"] = $pedsql;
				header("Location: ./pedbobina3deletar");	
        }
		elseif (isset($_POST['gerarop'])) {
				$pedsql = "SELECT * FROM pedbobina WHERE pedi = '".$pppd."'";
				$_SESSION["pedsql"] = $pedsql;
				header("Location: ./opbobina");	
        }			
		}
		
		if ($_POST["test"]=="admpedido2etiquetas") {        
            if (isset($_POST['alterar'])) {
				$pedsql = "SELECT * FROM pedetiqueta WHERE pedi = '".$pppd."'";
				$_SESSION["pedsql"] = $pedsql;
				header("Location: ./pedetiqueta3alterar");	
        }
		elseif (isset($_POST['deletar'])) {
				$pedsql = "SELECT * FROM pedetiqueta WHERE pedi = '".$pppd."'";
				$_SESSION["pedsql"] = $pedsql;
				header("Location: ./pedetiqueta3deletar");	
        }
		elseif (isset($_POST['gerarop'])) {
				$pedsql = "SELECT * FROM pedetiqueta WHERE pedi = '".$pppd."'";
				$_SESSION["pedsql"] = $pedsql;
				header("Location: ./opetiqueta");	
        }			
		}
		
		
		
		if ($_POST["test"]=="pedbobina3deletar") {
				$pedsql = "DELETE FROM pedbobina WHERE pedi = '".$pppd."'";
				$pedido = $pdo->prepare($pedsql);
				$pedido->execute();
				//header("Location: ./opbobina3alterar");	
		}
		
		
    
		
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	?>
	