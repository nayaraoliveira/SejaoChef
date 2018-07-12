<?php

session_start();

$link = mysqli_connect('db4free.net:3306', 'sejaochef', '123456789', 'sejaochef');

if (!$link) {
    die('Não foi possível conectar:' . mysqli_connect_error());
}
// caminho do seu arquivo de conexão ao banco de dados
$consulta = "SELECT * FROM ingredientes";
$con = $link->query($consulta) or die($link->error);
?>


<!DOCTYPE html>
<html>
<head>
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
    <link rel="stylesheet" type="text/css" href="css/CSSpaginaADM.css">
    <link rel="shortcut icon" type="image/x-icon" href="imagens/favicon.ico">

    <form id="formulario" name="ingredientes" action="paginaCadastro.php" method="GET">

</head>
<body>
    <div id="ttadm2">

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
    <br>


        <div class="container" id="acompanhar" align="center">

        <table width="180" border="1">

            <label><b>Gerenciamento dos pedidos</b></label>

            <tr>
                <th>ID</th>
                <th>Status</th>                
            </tr>
<tr>
                    <td><input disabled type="stylesheet" name="pedido1" size="6"></td>
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
                    <td><input disabled type="stylesheet" name="pedido2" size="6"></td>
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
                    <td><input disabled type="stylesheet" name="pedido3" size="6"></td>
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
                    <td><input disabled type="stylesheet" name="pedido4" size="6"></td>
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
                    <td><input disabled type="stylesheet" name="pedido5" size="6"></td>
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
                    <td></td>
                    <td><input class="btn btn-green btn-lg" type="button" value="Atualizar"></td>
                </tr>

        </table>
    </div><br>

       <div align="center">
            <button class="btn btn-orange" onclick="window.location.href ='paginaADM.php'" >Administrativo - Ingredientes</button>
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
</body>
</html>
