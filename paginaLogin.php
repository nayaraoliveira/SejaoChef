<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css">-->
		<meta charset="UTF-8"/>
	<!--	<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>-->


		<link rel="stylesheet" type="text/css" href="css/CSSpagina.css">
		<link rel="stylesheet" type="text/css" href="css/CSSpaginaCadastro.css">
		<link rel="shortcut icon" type="image/x-icon" href="imagens/favicon.ico">

		<title>SejaChef</title>

			<form id="formulario" name="entrar" action="paginaCadastro.php" method="GET">
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

<div id="ttcadastro">		

		<!--Div da tela que já possui cadastro -->
		<div id="cad1" align="left">

			<table width="100px" class="bordasimples">
				<caption align="center">Já tenho cadastro</caption>
				<tr>
	  				<td>CPF</td>
	 				<td align="left"><input type="text"size="15" maxlength="15" name="cpf2"></td>
	 			</tr>

				<tr>
					<td>Senha</td>
	 				<td align="left"><input type="password" size="15" maxlength="15" name="senha2"></td>
	 			</tr>

	 		</table>

 			<a href="paginaRedefinirSenha.html"><u>Esqueceu a senha?</u></a>

 			<div id="botaosentra" align="right"><br>
	 			<button href="paginaCadastro.php" class="btn btn-green" name="entrar" value="1">Entrar</button>
	 		</div><br>

		</div>
		
		<div id="cad2">

			<table class="bordasimples" align="left">
				<caption>Novo cadastro</caption>

				<tr>
	  				<td>Nome</td>
	 				 <td ><input type="text" size="40" maxlength="30" name="nome"></td>
	 			</tr>

	 			<tr>
	  				<td>CPF</td>
	 				<td ><input type="text" size="13" maxlength="11" name="cpf"></td>
	 			</tr>

				<tr>
					<td>E-mail</td>
	 				<td><input type="email" size="30" maxlength="35" name="email"></td>
	 			</tr>

				<tr>
					<td>Endereço</td>
	 				<td><input type="text"  size="30" maxlength="30" name="endereco"> 
	 				 	Nº<input type="text"  size="4" maxlength="5" name="numero"></td>
	 			</tr>

	 			<tr>
					<td>Referencia</td>
	 				<td><input type="text"size="30" maxlength="30" name="referencia"></td>
	 			</tr>

	 			<tr>
					<td>Celular</td>
	 				<td><input type="text" size="15" maxlength="15" name="celular"></td>
	 			</tr>

				<tr>
					<td>Senha</td>
	 				<td><input type="text"size="15" maxlength="15" name="senha"></td>
	 			</tr>

				<tr>
					<td>Confirmar Senha</td>
	 				<td align="left"><input type="text" size="15" maxlength="15" name="senhaok"></td>
	 			</tr>

	 		</table>

	 		<div id="botoescadastrar" align="right">
	 			<button class="btn btn-green" value="1" name="cadastrar">Cadastrar</button> <button class="btn btn-yellow" type= "reset">Limpar</button>
	 		</div>
		</div>

			<div id="rodape">
				<img id="imgrodape" src="imagens/img.sejaochef.png" align="center">
				<b>CONTATOS: (82) 91111 - 2222 / sejachef@gmail.com</b>
			</div>
	</div>
		
	<!--	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
 		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.js"></script>-->
	</body>
</html>
