<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SejaChef</title>

    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
            integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
            crossorigin="anonymous"></script>
    
    
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

 <div class="container-fluid" id="rodape">
        <div class=" container">
            <div class="row">
                <div class="col-xs-12 col-sn-12 col-md-4 col-lg-4">
                    <img id="imgrodape" src="imagens/img.sejaochef.png" align="center">
                </div>

                <div class="col-xs-12 col-sn-12 col-md-4 col-lg-4">
                    <p><span class=" glyphicon glyphicon-bishop"><b> CONTATOS: (82) 91111 - 2222</b></span></p>
                </div>

                <div class="col-xs-12 col-sn-12 col-md-4 col-lg-4">
                    <p>&reg; copyright 2018 - Seja Chef</p>
                </div>
            </div>
        </div>
    </div>
    
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>

</div>
</body>
</html>
