<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
   <head>
    <meta charset="UTF-8"/>
    
    <link rel="stylesheet" type="text/css" href="css/CSSpagina.css">
    <link rel="stylesheet" type="text/css" href="css/CSSpaginaInicial.css">
    <link rel="shortcut icon" type="image/x-icon" href="imagens/favicon.ico">

    <title>SejaChef</title>
    
    <script type="text/javascript">
        function slide1() {
            document.getElementById('id').src = "imagens/bannerlogo.png";
            setTimeout("slide2()", 6000)
        }

        function slide2() {
            document.getElementById('id').src = "imagens/banner_paes.png";
            setTimeout("slide3()", 6000)
        }

        function slide3() {
            document.getElementById('id').src = "imagens/banner_camarao.png";
            setTimeout("slide4()", 6000)
        }

        function slide4() {
            document.getElementById('id').src = "imagens/banner_hortalicas.png";
            setTimeout("slide5()", 6000)
        }

        function slide5() {
            document.getElementById('id').src = "imagens/banner_catchup.png";
            setTimeout("slide1()", 6000)
        }

    </script>
    </div>

</head>
<body onLoad="slide1()">

    <div id="ttinicial">

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
        <li id="um">
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
            <input type="image" src="imagens/img.usuario.png" width="30" height="30">
            <a href="paginaLogin.php"><i><?php echo $nome ?></i></a>
            <ul>
                <li><a href="paginaMeusPedidos.php">Meus Pedidos</a></li>
                <li><a href="deslogar" type="submit" name="deslogar">Sair</a></li>
            </ul>
        </li>
    </ul>
</nav>

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
