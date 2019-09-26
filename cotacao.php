<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulário de Cotação de Bobinas</title>
<link rel="stylesheet" href="estilo.css" type="text/css" media="all">
</head>
<body>
<form enctype="multipart/form-data" method="post" action="cotacao2.php">
  <table class="container-fluid">
  <tr>
  <td><h1 nowrap>Formulário de Cotação de Bobinas</h1></td>
  </tr>
  </table>
  <table class="container-fluid">
  <tr>
  <td>Quantidade de Items</td>
  <td><select name="quan" id="quan"> 
  <option value=1>1</option>
  <option value=2>2</option>
  <option value=3>3</option>
  <option value=4>4</option>
  <option value=5>5</option>
  <option value=6>6</option>
  <option value=7>7</option>
  <option value=8>8</option>
  <option value=9>9</option>
  <option value=10>10</option>
  </select></td>
  </tr>
  <tr>
  <td><input type="hidden" name="test" id="test" value="precot"></td>
  </tr>
  <tr>
  <td colspan="10">Quando estiver negociando com o cliente 2 opções de cores, passar cotação de 2 produtos</td>
  </tr>
  <tr>
  <td><button type="submit" class="btn">Fazer Cotação</button></td>
  </tr>
  
</form>
</body>
</html>
