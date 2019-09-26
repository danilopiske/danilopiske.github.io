<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulário de Crédito</title>
<link rel="stylesheet" href="estilo.css" type="text/css" media="all">
</head>
<body>

<form enctype="multipart/form-data" method="post" action="credito2.php">
  <table class="container-fluid">
  <tr>
  <td colspan="6"><h1 nowrap>Formulário de Pedido de Crédito</h1></td>
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
  <td><strong>Tipo de Crédito?</strong></td>
  <td><strong>Cliente Novo?</strong></td>
  <td><strong>Cliente Ativo?</strong></td>
  <td><strong>Cliente Tipo?</strong></td>
  </tr>
  <tr>
  <td><strong>Cliente:</strong></td>
  <td><input type="text" name="clie" id="clie" required placeholder="Nome do Cliente" ></td>
  <td><select name="cred" id="cred" required>
  <option value="">Escolha Uma Opção</option>
  <option value="Cliente Novo">1º Compra a Prazo</option>
  <option value="Já é Cliente">Aumentar o Limite</option>
  </select></td>
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
  <tr>
  <td>Ano de Fundação</td>
  <td>Quantidade De Protestos</td>
  <td>Valor Total do(s) Protesto(s)</td>
  <td>Tipo do(s) Protestos</td>
  <td>Tem Anuências?</td>
  <td>Média de Compras</td>
  </tr>
  <tr>
  <td><input type="text" name="anof" id="anof" maxlength="4" placeholder="Fundação do Cliente" required></td>
  <td><select name="quap" id="quap" required>
  <option value="">SELECIONE UMA OPÇÃO</option>
  <option value=0>0</option>
  <option value=1>1</option>
  <option value=2>2</option>
  <option value=3>3</option>
  <option value=4>4</option>
  <option value=5>5 Ou MAIS</option>
  </select></td>
  <td><input type="float" name="valo" id="valo" placeholder="Total de Protestos se houver" ></td>
  <td><input type="text" name="tipp" id="tipp" placeholder="Ex. Banco, Telefone" ></td>
  <td><select name="anue" id="anue">
  <option value="">SELECIONE UMA OPÇÃO</option>
  <option value="Têm Anuências">SIM</option>
  <option value="Não Tem Anuências">NÃO</option>
  </select></td>
  <td><input type="float" name="medc" id="medc" placeholder="Média de Compras conosco"></td>
  </tr><tr>
  <td>Quant. de Compras a Vista</td>
  <td>Quant. de Compras a Prazo</td>
  <td>Paga em dia?</td>
  <td>Valor do Crédito a Aprovar</td>
  <td>Forma de Pagamento</td>
  <td>Observações</td>
  </tr>
  <tr>
  <td><select name="quav" id="quav">
  <option value="">SELECIONE UMA OPÇÃO</option>
  <option value=0>0</option>
  <option value=1>1</option>
  <option value=2>2</option>
  <option value=3>3</option>
  <option value=4>4</option>
  <option value=5>5 Ou MAIS</option>
  </select></td>
  <td><select name="quaz" id="quaz">
  <option value="">SELECIONE UMA OPÇÃO</option>
  <option value=0>0</option>
  <option value=1>1</option>
  <option value=2>2</option>
  <option value=3>3</option>
  <option value=4>4</option>
  <option value=5>5 Ou MAIS</option>
   </select></td>
  <td><select name="paga" id="paga">
  <option value="SIM">SELECIONE UMA OPÇÃO</option>
  <option value="SIM">SIM</option>
  <option value="NÃO">NÃO</option>
  </select></td>
  <td><input type="float" name="vala" id="vala" placeholder="Valor de Crédito a Aprovar" required></td>
  <td><input type="text" name="fpcr" id="fpcr" placeholder="Forma de Pagto do Crédito" required></td>
  <td><input type="text" name="obse" id="obse" placeholder="Observações:" required></td>
  </tr>
  </table>
  <table class="container-fluid">
  <tr>
  <td>Referências Comerciais #1</td>
  </tr>
  <tr>
  <td>Fornecedor</td>
  <td>Cliente Desde</td>
  <td>Data da Ultima Compra</td>
  <td>Valor A Vencer</td>
  <td>Maior Acumulo</td>
  <td>Forma de Pagamento</td>
  <td>Observações, Fornece Referências?</td>
  </tr>
  <tr>
  <td><input type="text" name="for1" id="for1" placeholder="Nome do Fornecedor"></td>
  <td><input type="text" name="cld1" id="cld1" placeholder="Ex. 00/0000"></td>
  <td><input type="date" name="ult1" id="ult1"></td>
  <td><input type="float" name="val1" id="val1" placeholder="Ex. 00,00"></td>
  <td><input type="float" name="mai1" id="mai1" placeholder="Ex. 000,00"></td>
  <td><input type="float" name="fpg1" id="fpg1" placeholder="Ex. Boleto 00/00/00"></td>
  <td><input type="text" name="pon1" id="pon1"  placeholder="PONTUAL, NÃO FORNECE"></td>
  </tr>
  <tr>
  <td>Referências Comerciais #2</td>
  </tr>
  <tr>
  <td>Fornecedor</td>
  <td>Cliente Desde</td>
  <td>Data da Ultima Compra</td>
  <td>Valor A Vencer</td>
  <td>Maior Acumulo</td>
  <td>Forma de Pagamento</td>
  <td>Observações, Fornece Referências?</td>
  </tr>
  <tr>
    <td><input type="text" name="for2" id="for2" placeholder="Nome do Fornecedor"></td>
  <td><input type="text" name="cld2" id="cld2" placeholder="Ex. 00/0000"></td>
  <td><input type="date" name="ult2" id="ult2"></td>
  <td><input type="float" name="val2" id="val2" placeholder="Ex. 00,00"></td>
  <td><input type="float" name="mai2" id="mai2" placeholder="Ex. 000,00"></td>
  <td><input type="float" name="fpg2" id="fpg2" placeholder="Ex. Boleto 00/00/00"></td>
  <td><input type="text" name="pon2" id="pon2"  placeholder="PONTUAL, NÃO FORNECE"></td>
  </tr>
  
  
  
  
  </table>
  <table>
  <tr>
  <td><button type="submit" class="btn">Pedir Crédito</button></td> 
  </tr>
  </table>
  <table>
  <tr>
  </tr>
  <tr>
  <h5 align="center"><strong>---*** ATENÇÃO: Todas as Informações aqui enviadas poderão ter a necessidade de serem comprovadas Futuramente, Guarde as fontes de informação. ***---</strong></h5>
  </tr>
  </table>
  
</form>
</body>
</html>
