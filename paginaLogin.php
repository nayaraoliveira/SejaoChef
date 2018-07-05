<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>	
		<script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="css/CSSpagina.css">
		<link rel="stylesheet" type="text/css" href="css/CSSpaginaCadastro.css">
		<link rel="shortcut icon" type="image/x-icon" href="imagens/favicon.ico">

		<title>SejaChef</title>
	</head>
	<body>

		<form id="formulario" name="entrar" action="paginaCadastro.php" method="GET">
		
		<div id="div1" align="center">
			<img id="imagens" src="imagens/img.sejaochef.png" align="center">
		</div>

		<!--menu da página inicial-->
			<nav class="menu">
    <ul>
            <li> <a href="paginaInicial.php">Inicial</a></li>
            <li> <a href="paginaCardapio.php">Cardápio</a> </li>
            <li> <a href="paginaMontarpedido.php">Montagem</a>
            <li> <a href="paginaLogin.php">Login</a> </li>
            <li>
              <!--<img src="imagens/img.usuario.png" width="30" height="30"-->
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

		<!--Div da tela que já possui cadastro-->
		<div id="cad1" align="left">

			<label>Já tenho cadastro</label>

			<table width="100px" class="bordasimples">
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

				<label> <b>Novo Usuário </b></label>
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
					<td>Referência</td>
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
		
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	</body>
</html>
