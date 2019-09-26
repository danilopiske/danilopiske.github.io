<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="">
<title>Cadastro de Clientes</title>
<link rel="stylesheet" href="estilo.css" type="text/css" media="all">
</head>

<body>
<?php 
session_start("pedido");
require_once 'checaadm.php';

?>
<strong><a href="index_administrativo.php"><img src="images/logo.jpg" alt="" width="166" height="112"></a><h2>Cadastro de Clientes</strong></h2>
<form enctype="multipart/form-data" method="post" action="processa.php">
  <table class="container-fluid">
  <tr>
  <td>Codigo</td>
  <td><input name="codi" type="text" required class="form-control" placeholder="Ex.: 0000000000" maxlength="10"></td>
  <td>Nome Fantasia</td>
  <td><input type="text" name="nome" class="form-control" size="35" required></td>
  <td>Razão Social</td>
  <td><input type="text" name="raza" class="form-control" size="35" required></td>
  <td>Vendedora</td>
  <td><input type="text" name="vend" class="form-control" size="15" required></td>
  </tr>
  <tr>
  <td>Endereço</td>
  <td><input type="text" name="ende" class="form-control" required></td>
  <td>Bairro</td>
  <td><input type="text" name="bair" class="form-control" required></td>
  <td>Cidade</td>
  <td><input type="text" name="cida" class="form-control" required></td>
  <td>Estado UF</label> <select name="uf" id="uf">
	<option value="">Selecione</option>
	<option value="AC">AC</option>
	<option value="AL">AL</option>
	<option value="AM">AM</option>
	<option value="AP">AP</option>
	<option value="BA">BA</option>
	<option value="CE">CE</option>
	<option value="DF">DF</option>
	<option value="ES">ES</option>
	<option value="GO">GO</option>
	<option value="MA">MA</option>
	<option value="MG">MG</option>
	<option value="MS">MS</option>
	<option value="MT">MT</option>
	<option value="PA">PA</option>
	<option value="PB">PB</option>
	<option value="PE">PE</option>
	<option value="PI">PI</option>
	<option value="PR">PR</option>
	<option value="RJ">RJ</option>
	<option value="RN">RN</option>
	<option value="RS">RS</option>
	<option value="RO">RO</option>
	<option value="RR">RR</option>
	<option value="SC">SC</option>
	<option value="SE">SE</option>
	<option value="SP">SP</option>
	<option value="TO">TO</option>
  </select> </td>
  </tr>
  
  <tr>
  <td>Cep</td>
  <td><input type="text" name="cep" class="form-control" placeholder="Ex.: 00000-000" required></td>
  <td>Cnpj / Cpf</td>
  <td><input type="text" name="cnpj" class="form-control" required><br></td>
  <td>Insc. Estadual</td>
  <td><input type="text" name="iest" class="form-control"> </td>
  </tr>
  
  <tr>
  <td>Contato</td>
  <td><input type="text" name="cont" class="form-control" required></td>
  <td>Telefone 1</td>
  <td><input type="text" name="tel1" class="form-control" required></td>
  <td>E-mail</td>
  <td><input type="text" name="emai" class="form-control" required></td>
  </tr>
  <tr>
  <td><input type="hidden" name="test" class="form-control" value="cadcliente" required></td>
  </tr>
  <tr>
  <td><button type="submit" class="btn">Cadastrar Cliente</button></td>
  <td><button type="reset" class="btn">Limpar Formulário</button></td>
  </tr>
</form>

</body>
</html>