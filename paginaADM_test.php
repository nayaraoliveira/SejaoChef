<?php
$link=mysqli_connect('db4free.net:3306','sejaochef','123456789','sejaochef');

if(!$link){ 
	die('Não foi possível conectar:'.mysqli_connect_error());
} 
// caminho do seu arquivo de conexão ao banco de dados
$consulta = "SELECT * FROM ingredientes";
$con      = $link->query($consulta) or die($link->error);
?>	


<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
			<title>SejaChef</title>
			<link rel="stylesheet" type="text/css" href="css/CSSpagina.css">
      <link rel="stylesheet" type="text/css" href="css/CSSpaginaADM.css">
      <link rel="shortcut icon" type="image/x-icon" href="imagens/favicon.ico">
	  <form id="formulario" name="ingredientes" action="paginaCadastro.php" method="GET">
	</head>
	<body>
		
		<div id="div1" align="center">
			<img id="imagens" src="imagens/img.sejaochef.png" align="center">
		</div>
		<!--menu da página inicial -->
		<div id="menu">
		<ul>
            <li> <a href="paginaInicial.html">Inicial</a> </li>
            <li> <a href="paginaCardapio.html">Cardápio</a> </li>
            <li> <a href="paginaMontarpedido.html">Montagem</a> </li>
            <li> <a href="paginaMeusPedidos.html">Meus Pedidos</a> </li>
            <li> <a href="paginaCadastro.html">Cadastro</a> </li>
		</ul>
	</div>

  <div id="ttadm">
		
	<div id="add">
			<table  height=50 border="1">
			<caption>Adicionar Ingredientes</caption>
			<tr><td>Ingrediente</td> <td>Quantidade</td> <td>Tipo</td> <td>Valor</td> </tr>

			<tr>
  				<td><input type="stylesheet" name="ingrediente1"></td>
  				<td><input type="text" name="quantidade1" size="6"></td>
  				<td><select name="tipo1">
						<option></option>
 						<option>Pães</option>
 						<option>Recheios</option>
 						<option>Molhos</option>
 						<option>Saladas</option>
 						<option>Bebidas</option>
 					</select></td>
  				<td><input type="text" name="valor1" size="6"></td>
 			</tr>
 			
 			<tr>
  				<td><input type="stylesheet" name="ingrediente2"></td>
  				<td><input type="text" name="quantidade2" size="6"></td>
  				<td><select name="tipo2">
  						<option></option>
 						<option>Pães</option>
 						<option>Recheios</option>
 						<option>Molhos</option>
 						<option>Saladas</option>
 						<option>Bebidas</option>
 					</select></td>
  				<td><input type="text" name="valor2" size="6"></td>
 			</tr>
 			<tr>
  				<td><input type="stylesheet" name="ingrediente3"></td>
  				<td><input type="text" name="quantidade3" size="6"></td>
  				<td><select name="tipo3">
  						<option></option>
 						<option>Pães</option>
 						<option>Recheios</option>
 						<option>Molhos</option>
 						<option>Saladas</option>
 						<option>Bebidas</option>
 					</select></td>
  				<td><input type="text" name="valor3" size="6"></td>
 			</tr>
 			
 			
 			 			
 		</table>

 		<tr><p><button href="paginaCadastro.php" class="btn btn-green" name="ingrediente" value="1">Cadastrar</button></p></tr>	
 		</div>			
		


 		<div id="add2">
			<table  height=50 border="1">
			    <caption>Gerenciamento dos Pedidos</caption>
			<tr><td>Nº do pedido</td> <td>Status do Pedido</td></tr>

			<tr>
  				<td><input type="stylesheet" name="pedido1" size="6"></td>
  				<td><select>
  						<option></option>
 						<option>Pedido recebido</option>
 						<option>Pedido em produção</option>
 						<option>Pedido a caminho</option>
 						<option>Pedido entregue</option>
 						<option>Pedido cancelado</option>
 					</select></td>
 			</tr>
 			<tr>
  				<td><input type="stylesheet" name="pedido2" size="6"></td>
  				<td><select>
  						<option></option>
 						<option>Pedido recebido</option>
 						<option>Pedido em produção</option>
 						<option>Pedido a caminho</option>
 						<option>Pedido entregue</option>
 						<option>Pedido cancelado</option>
 					</select></td>
 			</tr>
 			<tr>
  				<td><input type="stylesheet" name="pedido3" size="6"></td>
  				<td><select>
  						<option></option>
 						<option>Pedido recebido</option>
 						<option>Pedido em produção</option>
 						<option>Pedido a caminho</option>
 						<option>Pedido entregue</option>
 						<option>Pedido cancelado</option>
 					</select></td>
 			</tr>
 			<tr>
  				<td><input type="stylesheet" name="pedido4" size="6"></td>
  				<td><select>
  						<option></option>
 						<option>Pedido recebido</option>
 						<option>Pedido em produção</option>
 						<option>Pedido a caminho</option>
 						<option>Pedido entregue</option>
 						<option>Pedido cancelado</option>
 					</select></td>
 			</tr>
 			<tr>
  				<td><input type="stylesheet" name="pedido5" size="6"></td>
  				<td><select>
  						<option></option>
 						<option>Pedido recebido</option>
 						<option>Pedido em produção</option>
 						<option>Pedido a caminho</option>
 						<option>Pedido entregue</option>
 						<option>Pedido cancelado</option>
 					</select></td>
 			</tr>

 		</table><br>

 		<tr>
      <td><input class="btn btn-green" type="button"value="Atualizar"></td>
    </tr>

  </div>
  <!--DIV da tabela Gerenciar Ingredientes -->
  
 	
	<div>
			<table border="1">
			<caption>Gerenciamento dos Ingredientes</caption>
				<tr>
				  <td>Nome</td>
				  <td>Quantidade</td>
				  <td>Tipo</td>
				  <td>Valor</td>
				  
				</tr>
				<?php while($dado = $con->fetch_array()) { ?>
				<tr>
				  <td align="left"><input type="text"size="11" maxlength="15" name="nome" value="<?php echo $dado['nome']?>"></td>
				  <td align="left"><input type="passaword" size="4" maxlength="15" name="quantidade" value="<?php echo $dado['quantidade']?>"></td>
				  <td align="left"><input type="passaword" size="10" maxlength="15" name="tipo" value="<?php echo $dado['tipo']?>"></td>					 
				  <td align="left"><input type="passaword" size="4" maxlength="15" name="valor" value="<?php echo $dado['valor']?>"></td>
				 
				  <td>
					<a href="usu_editar.php?codigo=<?php echo $dado['nome']?>">Atualizar</a>
					<a href="excluir_usuario.php?codigo=<?php echo $dado['nome']?>">Excluir</a>
				  </td>
				</tr>
				<?php } ?>
			  </table>
 		</div>
		
		
		
		
		
		
		
		
        <div id="rodape">
          <img id="imgrodape" src="imagens/img.sejaochef.png" align="center">
          <b>CONTATOS: (82) 91111 - 2222 / sejachef@gmail.com</b>
        </div>


 	</div>

		</body>
</html>
