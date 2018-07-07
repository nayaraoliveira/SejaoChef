<?php

session_start();

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

      <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
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
		  		<nav class="menu">
    <ul>
            <li> <a href="paginaInicial.php">Inicial</a></li>
            <li> <a href="paginaCardapio.php">Cardápio</a> </li>
            <li> <a href="paginaMontarpedido.php">Montagem</a>
            <li> <a href="paginaLogin.php">Login</a> </li>
            <li>
              <!--<img src="imagens/img.usuario.png" width="30" height="30" >-->
			  <?php if ($_SESSION['nome']==null){
				  $nome='Faça seu login!';
			  }else{$nome=$_SESSION['nome'];}
			  ?>
              <label id="tec"><i><a href="paginaLogin.php"><?php echo $nome?></a></i></label>
              <ul>
              	<li><a href="paginaMeusPedidos.php">Meus Pedidos</a></li>
              	<li>Deslogar</li>
              </ul>

            </li>
    </ul>	
          
      </nav><br>

  <div id="ttadm">

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
	
		
		<div id="rodape">
          <img id="imgrodape" src="imagens/img.sejaochef.png" align="center">
          <b>CONTATOS: (82) 91111 - 2222 / sejachef@gmail.com</b>
        </div>


 	</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
		</body>
</html>
