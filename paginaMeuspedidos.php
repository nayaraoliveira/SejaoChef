<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
			<title>SejaChef</title>
			<link rel="stylesheet" type="text/css" href="css/CSSpagina.css">
			<link rel="stylesheet" type="text/css" href="css/CSSpaginaMeuspedidos.css">
			<link rel="shortcut icon" type="image/x-icon" href="imagens/favicon.ico">
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

		<div id="ttmeuspedidos">

			
			<div id="rodape">
			<img id="imgrodape" src="imagens/img.sejaochef.png" align="center">
				<b>CONTATOS: (82) 91111 - 2222 / sejachef@gmail.com</b>
			</div>

		</div>
