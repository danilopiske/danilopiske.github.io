<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulário de Cotação</title>
<link rel="stylesheet" href="estilo.css" type="text/css" media="all">
</head>
<body>
<?php
$quan = $_POST["quan"];

?>

<form enctype="multipart/form-data" method="post" action="email.php">
  <table class="container-fluid">
  <tr>
  <td colspan="6"><h1>Formulário de Cotação de Preços</h1></td>
  </tr>
  <tr>
  <td><strong>Vendedora:</strong></td>
  <td><select name="vend" id="vend" required>
  <option value="">Selecione a Vendedora</option>
  <option value="Jussara">Jussara</option>
  <option value="Camila">Camila</option>
  <option value="Sabrina">Sabrina</option>
  <option value="Renata">Renata</option>
  <option value="Fernanda">Fernanda</option>
  </select></td>
  <td><strong>Cliente Novo?</strong></td>
  <td><strong>Cliente Ativo?</strong></td>
  <td><strong>Cliente Tipo?</strong></td>
  </tr>
  <tr>
  <td><strong>Cliente:</strong></td>
  <td><input type="text" name="clie" id="clie" placeholder="Nome do Cliente" required></td>
  <td><select name="novo" id="novo" required>
  <option value="">Escolha Uma Opção</option>
  <option value="Cliente Novo">Cliente Novo</option>
  <option value="Já é Cliente">Já é Cliente</option>
  </select></td>
  <td><select name="ativ" id="ativ" required>
  <option value="">Escolha Uma Opção</option>
  <option value="Cliente Ativo">Cliente Ativo</option>
  <option value="Cliente Não é Ativo">Cliente Não é Ativo</option>
  </select></td>
  <td><select name="tipo" id="tipo" required>
  <option value="">Escolha Uma Opção</option>
  <option value="Revenda">Revenda</option>
  <option value="Consumo Final">Consumo Final</option>
  </select></td>
  </tr>
  </table>
  <table class="container-fluid">
  
  <?php 
  for ($i = 1; $i <= $quan; $i++){
  echo '<tr><td><strong>Produto'.$i.'</strong></td></tr>';
  echo '<tr><td>Largura</td>';
  echo '<td>Metragem</td>';
  echo '<td>Papel</td>';
  echo '<td>Cores</td>';
  echo '<td>Quantidade</td>';
  echo '<td>Preço Tabela</td></tr><tr>';
  echo '<td><input type="text" name="lar[]" id="lar[]" placeholder="Ex.: 79, 89" required>';
  echo '</td><td>';
  echo '<input type="text" name="met[]" id="met[]" placeholder="Ex.: 30, 40" required>';
  echo '</td><td>';
  echo '<input type="text" name="pap[]" id="pap[]" placeholder="Ex.: KPR 55, AMARELO, 01 Via" required>';
  echo '</td><td>';
  echo '<select name="cor[]" id="cor[]" required>';
  echo '<option value="">Quantas Cores</option>';
  echo '<option value="LISA">LISA</option>';
  echo '<option value="1 COR">1 COR</option>';
  echo '<option value="2 CORES">2 CORES</option>';
  echo '<option value="3 CORES">3 CORES</option>';
  echo '</select></td>';
  echo '<td><input type="text" name="qua[]" id="qua[]" placeholder="Ex.: 70 Caixas ou 10 Unds" required>';
  echo '</td><td>';
  echo '<input type="float" name="tab[]" id="tab[]" placeholder="Preço da nossa tabela" required>';
  echo '</td><td></tr><tr>';
  echo '<td>Preço Feito</td>';
  echo '<td>Último Preço Nosso</td>';
  echo '<td>Data do Último Preço</td>';
  echo '<td>Preço Concorrente</td>';
  echo '<td>Concorrente</td>';
  echo '<td>Observações</td></tr><tr>';
  echo '<td><input type="float" name="prf[]" id="prf[]" placeholder="Preço Feito ao cliente" required>';
  echo '</td><td>';
  echo '<input type="float" name="ulp[]" id="ulp[]" placeholder="Último Preço Vendido">';
  echo '</td><td>';
  echo '<input type="date" name="dup[]" id="dup[]">';
  echo '</td><td>';
  echo '<input type="float" name="prc[]" id="prc[]" placeholder="Preço do Concorrente" >';
  echo '</td><td>';
  echo '<input type="text" name="con[]" id="con[]" placeholder="Nome do Concorrente" >';
  echo '</td><td>';
  echo '<input type="text" name="obs[]" id="obs[]" placeholder="Impostos Diferentes e Obs." >';
  echo '</td></tr>';
 
  }
  ?>
  <input type="hidden" name="test" id="test" value="precot">
  <input type="hidden" name="quan" id="quan" value="<?php echo $quan?>">
  </tr>
  <tr>
  <td colspan="6">Quando estiver negociando com o cliente 2 opções de cores, passar cotação de 2 produtos</td>
  </tr>
  <tr>
  <td><button type="submit" class="btn">Pedir Cotação</button></td>
  </tr>
  
</form>
</body>
</html>
