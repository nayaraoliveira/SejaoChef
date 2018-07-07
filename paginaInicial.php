<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Seja Chef</title>
    <link rel="stylesheet" type="text/css" href="css/CSSpagina.css">
    <link rel="stylesheet" type="text/css" href="css/CSSpaginaInicial.css">
    <link rel="shortcut icon" type="image/x-icon" href="imagens/favicon.ico">

    <script type="text/javascript">
        function slide1() {
            document.getElementById('id').src = "imagens/img.catchup.jpg";
            setTimeout("slide2()", 3000)
        }

        function slide2() {
            document.getElementById('id').src = "imagens/img.camarao.jpg";
            setTimeout("slide3()", 3000)
        }

        function slide3() {
            document.getElementById('id').src = "imagens/img.azeitona1.jpg";
            setTimeout("slide4()", 3000)
        }

        function slide4() {
            document.getElementById('id').src = "imagens/img.milho1.jpg";
            setTimeout("slide5()", 3000)
        }

        function slide5() {
            document.getElementById('id').src = "imagens/img.hfrango.jpg";
            setTimeout("slide6()", 3000)
        }

        function slide6() {
            document.getElementById('id').src = "imagens/img.cheddar.jpg";
            setTimeout("slide1()", 3000)
        }
    </script>
    </div>

</head>
<body onLoad="slide1()">

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

<div id="ttinicial">
    <div>
        <div>
            <img id="id">
        </div>
    </div>

    <!--texto página inicial -->
    <div id="textoinicial" align="left" margin="100px">
        <p><b>Nossa missão é fornecer sanduíches personalizados com sabor, qualidade e higiene. Aqui,
                você escolhe os ingredientes de sua preferência, selecionados cuidadosamente para montar
                sanduíches exóticos e deliciosos.<br><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Crie seu cardápio personalizado dando nome às suas obras
                de arte gastronômicas ou selecione uma de nossas sugestões, incrementando-a como quiser para
                proporcionar uma melhor experiência de sabor.<br><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Não está achando o ingrediente certo para inebriar seu
                paladar? Mande sugestões de itens para abastecermos nossa despensa e aumentar o seu deleite criativo e
                suas opções de degustação.<br><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Satisfaça seu desejo de criar e (Porque não?) comer bem,
                lembrando sempre que aqui, em nossa cozinha, nós queremos que você <i>Seja o Chef!</i></b></p>
    </div>

    <!--video da página inicial -->
    <div id="videoinicial" align="left">
        <video width="600px" height="400px" controls>
            <source src="video.comida.mp4" type="video/mp4">
        </video>
    </div>

    <div id="rodape">
        <img id="imgrodape" src="imagens/img.sejaochef.png" align="center">
        <b>CONTATOS: (82) 91111 - 2222 / sejachef@gmail.com</b>
    </div>

</div>

</body>
</html>
