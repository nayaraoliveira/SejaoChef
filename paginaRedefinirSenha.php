<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <title>SejaChef</title>
    <link rel="stylesheet" type="text/css" href="css/CSSpagina.css">
    <link rel="shortcut icon" type="image/x-icon" href="imagens/favicon.ico">
</head>
<body>

<div id="div1" align="center">
    <img id="imagens" src="imagens/img.sejaochef.png" align="center">
</div>
<!--menu da página inicial -->
<nav class="menu">
    <ul>
        <li><a href="paginaInicial.php">Inicial</a></li>
        <li><a href="paginaCardapio.php">Cardápio</a></li>
        <li><a href="paginaMontarpedido.php">Montagem</a>
        <li><a href="paginaLogin.php">Login</a></li>
        <li>
            <!--<img src="imagens/img.usuario.png" width="30" height="30" >-->
            <?php

            if (isset($_GET['deslogar'])) {
                $_SESSION['nome'] = NULL;
            }

            if (@$_SESSION['nome'] == NULL) {
                $nome = 'Faça seu login!';
            } else {
                $nome = $_SESSION['nome'];
            }
            ?>
            <label id="tec"><i><a href="paginaLogin.php"><?php echo $nome ?></a></i></label>
            <ul>
                <li><a href="paginaMeusPedidos.php">Meus Pedidos</a></li>
                <li>
                    <button class="btn btn-orange" type="submit" name="deslogar"> Sair</button>
                </li>
            </ul>
        </li>
    </ul>
</nav>
<br>

<div id="ttredefinir"><br><br><br><br>

    <div id="redsenha" align="center">

        Coloque seu e-mail para redefinir a senha:<br>
        <input type="email" size="30" maxlength="30">
        <button class="btn btn-green">Enviar</button>
    </div>

    <div id="rodape">
        <img id="imgrodape" src="imagens/img.sejaochef.png" align="center">
        <b>CONTATOS: (82) 91111 - 2222 / sejachef@gmail.com</b>
    </div>

</div>

</body>
</html>
