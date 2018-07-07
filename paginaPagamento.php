<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <meta charset="UTF-8"/>
    <title>SejaChef</title>
    <link rel="stylesheet" type="text/css" href="css/CSSpagina.css">
    <link rel="stylesheet" type="text/css" href="css/CSSpaginaPagamento.css">
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
<br><br>

<div id="ttpagamento">

    <div id="pedidos" align="left">

        <table width=200 height=50>
            <tr>
                <th>Pedido</th>

                <th>Valor</th>
            </tr>
            <tr>
                <td><input type="text"></td>
                <td><input type="text" size="5"></td>
            </tr>
            <tr>
                <td><input type="text"></td>
                <td><input type="text" size="5"></td>
            </tr>
            <tr>
                <td><input type="text"></td>
                <td><input type="text" size="5"></td>
            </tr>
            <tr>
                <td><input type="text"></td>
                <td><input type="text" size="5"></td>
            </tr>

            <table align="left">
                <br>
                <tr>
                    <td>Total R$</td>
                    <td align="rigth"><input type="text" size="15" maxlength="15"></td>
                </tr>
            </table>

        </table>
    </div>

    <!-- formas de pagamento -->
    <div id="formasPagamento" align="center">

        <label> Escolha a forma de pagamento:</label><br><br>


        <table align="center">
            <tr>
                <td>
                    <input type="radio" name="pag"><label>Cartão</label>
                </td>
                <td>
                    <input type="radio" name="pag"><label>À vista</label>
                </td>
            </tr>
        </table>
        <br>
        <button class="btn btn-green">Confirmar</button>

    </div>

    <div id="rodape">
        <img id="imgrodape" src="imagens/img.sejaochef.png" align="center">
        <b>CONTATOS: (82) 91111 - 2222 / sejachef@gmail.com</b>
    </div>

</div>
</body>
</html>
