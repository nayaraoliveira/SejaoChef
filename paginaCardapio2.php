<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>SejaChef</title>

    <link rel="stylesheet" type="text/css" href="css/CSSpagina.css">
    <link rel="stylesheet" type="text/css" href="css/CSSpaginaCardapio.css">
    <link rel="shortcut icon" type="image/x-icon" href="imagens/favicon.ico">

</head>
<body>

<div id="div1" align="center">
    <img id="imagens" src="imagens/img.sejaochef.png" align="center">
</div>
<!--menu da página inicial -->
<div id="menu">
    <ul>
        <li><a href="paginaInicial.html">Inicial</a></li>
        <li><a href="paginaCardapio2.php">Cardápio</a></li>
        <li><a href="paginaMontarpedido.html">Montagem</a></li>
        <li><a href="paginaMeusPedidos.html">Meus Pedidos</a></li>
        <li><a href="paginaCadastro.html">Login</a></li>
    </ul>
</div>

<div id="ttcardapio">
    <br><br>

    <label id="name"> Olá,<i><a><?php echo $_GET['nome']?></a></i></label>

    <br><br><br><br>

    <div id="listacardapio" align=left>
        <table class="tab" width="600" height="90">
            <tr>
                <td>
                    <img id="ima" src="imagens/img.xcalabresa.jpg" width="130" height="100">
                </td>
                <td>
                    <b id="titulocardapio">X-CALABRESA</b><br><br>
                    <label id="textocardapio"><b><i>Ingredientes:</i></b>Pão bola, hamburguer, alface, tomate,
                        calabresa,queijo e presunto</label>
                </td>
                <td width="100" height="100" align="center">
                    <label><b>R$ 15,00</b></label><br><br>
                    <input type="text" size="4"> <br>
                    <input class="btn btn-green" type="button" value="  +  ">
                    <input class="btn btn-yellow" type="button" value="  -  ">
                </td>
            </tr>
        </table>
        <br>
        <table class="tab" width="600" height="90">
            <tr>
                <td>
                    <img id="ima" src="imagens/img.xbacon.jpg" width="130" height="100">
                </td>
                <td>
                    <b id="titulocardapio">X-BACON</b><br><br>
                    <label id="textocardapio"><b><i>Ingredientes:</i></b>Pão bola, hamburguer, tomate, alface,
                        bacon, queijo e presunto</label>
                </td>
                <td width="100" height="100" align="center">
                    <label><b>R$ 15,00</b></label><BR>
                    <input type="text" size="4"> <br>
                    <input class="btn btn-green" type="button" value="  +  ">
                    <input class="btn btn-yellow" type="button" value="  -  ">
                </td>
            </tr>
        </table>
        <br>
        <table class="tab" width="600" height="90">
            <tr>
                <td>
                    <img id="ima" src="imagens/img.xfrango.png" width="130" height="100">
                </td>
                <td>
                    <b id="titulocardapio">X-FRANGO</b><br><br>
                    <label id="textocardapio"><b><i>Ingredientes:</i></b>Pão bola, hamburguer, tomate, alface,
                        frango, queijo e presunto</label>
                </td>
                <td width="100" height="100" align="center">
                    <label><b>R$ 15,00</b></label><BR>
                    <input type="text" size="4"> <br>
                    <input class="btn btn-green" type="button" value="  +  ">
                    <input class="btn btn-yellow" type="button" value="  -  ">
                </td>
            </tr>
        </table>
        <br>
        <table class="tab" width="600" height="90">
            <tr>
                <td>
                    <img id="ima" src="imagens/img.xcarnesol.jpg" width="130" height="100">
                </td>
                <td>
                    <b id="titulocardapio">X-CARNE DE SOL</b><br><br>
                    <label id="textocardapio"><b><i>Ingredientes:</i></b>Pão bola, hamburguer, tomate, alface, carne de
                        sol, queijo e presunto
                    </label>
                </td>
                <td width="100" height="100" align="center">
                    <label><b>R$ 15,00</b></label><BR>
                    <input type="text" size="4"> <br>
                    <input class="btn btn-green" type="button" value="  +  ">
                    <input class="btn btn-yellow" type="button" value="  -  ">
                </td>
            </tr>
        </table>
        <br>
        <table class="tab" width="600" height="90">
            <tr>
                <td>
                    <img id="ima" src="imagens/img.xtanajura.png" width="130" height="100">
                </td>
                <td>
                    <b id="titulocardapio">X-TANAJURA (SAZONAL)</b><br><br>
                    <label id="textocardapio"><b><i>Ingredientes:</i></b>Pão bola, hamburguer, tomate, alface, tanajura,
                        queijo e presunto
                    </label>
                </td>
                <td width="100" height="100" align="center">
                    <label><b>R$ 15,00</b></label><br>
                    <input type="text" size="4"> <br>
                    <input class="btn btn-green" type="button" value="  +  ">
                    <input class="btn btn-yellow" type="button" value="  -  ">
                </td>
            </tr>
        </table>

        <br>

        <table class="tab" width="600" height="90">
            <tr>
                <td>
                    <img id="ima" src="imagens/img.passacarne.png" width="130" height="100">
                </td>
                <td>
                    <b id="titulocardapio">PASSAPORTE DE CARNE</b><br><br>
                    <label id="textocardapio"><b><i>Ingredientes:</i></b>Pão seda, salsicha,
                        tomate, ervilha, carne moída, milho, catchup, maionese</label>
                </td>
                <td width="100" height="100" align="center">
                    <label><b>R$ 15,00</b></label><BR>
                    <input type="text" size="4"> <br>
                    <input class="btn btn-green" type="button" value="  +  ">
                    <input class="btn btn-yellow" type="button" value="  -  ">
                </td>
            </tr>
        </table>
        <br>

        <table class="tab" width="600" height="90">
            <tr>
                <td>
                    <img id="ima" src="imagens/img.passafrango.png" width="130" height="100">
                </td>
                <td>
                    <b id="titulocardapio">PASSAPORTE DE FRANGO</b><br><br>
                    <label id="textocardapio"><b><i>Ingredientes:</i></b>Pão seda, salsicha,
                        tomate, ervilha, frango desfiado, milho, catchup, maionese</label>
                </td>
                <td width="100" height="100" align="center">
                    <label><b>R$ 15,00</b></label><BR>
                    <input type="text" size="4"> <br>
                    <input class="btn btn-green" type="button" value="  +  ">
                    <input class="btn btn-yellow" type="button" value="  -  ">
                </td>
            </tr>
        </table>
        <br>

        <table class="tab" width="600" height="90">
            <tr>
                <td>
                    <img id="ima" src="imagens/img.passacharque.jpg" width="130" height="100">
                </td>
                <td>
                    <b id="titulocardapio">PASSAPORTE DE CHARQUE</b><br><br>
                    <label id="textocardapio"><b><i>Ingredientes:</i></b>Pão seda, salsicha,
                        tomate, ervilha, charque desfiado, milho, catchup, maionese</label>
                </td>
                <td width="100" height="100" align="center">
                    <label><b>R$ 15,00</b></label><BR>
                    <input type="text" size="4"> <br>
                    <input class="btn btn-green" type="button" value="  +  ">
                    <input class="btn btn-yellow" type="button" value="  -  ">
                </td>
            </tr>
        </table>
        <br>
    </div>


    <div id="escolhidoscardapio" align="center">
        <br><br><label><b>Ingredientes Escolhidos</b></label><br><br>

        <table width=200 height=50>

            <tr>
                <th>Sanduiches</th>
                <th>Valores</th>
            </tr>

            <tr>
                <td><input type="text"></td>
                <td><input type="text" size="10"></td>
            </tr>

            <tr>
                <td><input type="text"></td>
                <td><input type="text" size="10"></td>
            </tr>

            <tr>
                <td><input type="text"></td>
                <td><input type="text" size="10"></td>
            </tr>

            <tr>
                <td><input type="text"></td>
                <td><input type="text" size="10"></td>
            </tr>

            <tr>
                <td align="center"><b>Valor Total</b></td>
                <td align="rigth"><input type="text" size="10" maxlength="15"></td>
            </tr>

            <table align="center"><br>
                <tr>
                    <td align="center"><input class="btn btn-yellow" type="button" value="Limpar"></td>
                    <td><input class="btn btn-green" type="button"
                               onclick="window.location.href  = 'paginaPagamento.html'" value=" Finalizar a compra ">
                    </td>
                </tr>

            </table>

        </table>

    </div>

    <div id="rodape">
        <img id="imgrodape" src="imagens/img.sejaochef.png" align="center">
        <b>CONTATOS: (82) 91111 - 2222 / sejachef@gmail.com</b>
    </div>

</div>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Seja Chef</title>
    <link rel="stylesheet" type="text/css" href="css/CSSpagina.css">
    <link rel="stylesheet" type="text/css" href="css/CSSpaginaCardapio.css">
</head>
<body>

<div id="div1" align="center">
    <img id="imagens" src="imagens/img.sejaochef.png" align="center">
</div>
<!--menu da página inicial -->
<div id="menu">
    <ul>
        <li><a href="paginaInicial.html">Inicial</a></li>
        <li><a href="paginaCardapio2.php">Cardápio</a></li>
        <li><a href="paginaMontarpedido.html">Montagem</a></li>
        <li><a href="paginaMeusPedidos.html">Meus Pedidos</a></li>
        <li><a href="paginaCadastro.html">Cadastro</a></li>
    </ul>
</div>

<br><br><br>

<label align="center">Olá,<i> NOME DA PESSOA <a> <?php echo $_GET['nome'] ?></a> </i></label>

<br><br><br>
<div id="ttcardapio">
    <div id="listacardapio" align=left>
        <table class="tab" width="600" height="90">
            <tr>
                <td>
                    <img id="ima" src="imagens/img.xcalabresa.jpg" width="130" height="100">
                </td>
                <td>
                    <b id="titulocardapio">X-CALABRESA</b><br><br>
                    <label id="textocardapio"><b><i>Ingredientes:</i></b>Pão bola, hamburguer, alface, tomate,
                        calabresa,
                        queijo e presunto</label>
                </td>
                <td width="100" height="100" align="center">
                    <label><b>R$ 15,00</b></label><BR>
                    <input class="btn btn-yellow" type="button" value="  +  ">
                    <input class="btn btn-red" type="button" value="  -  ">
                </td>
            </tr>
        </table>
        <br>
        <table class="tab" width="600" height="90">
            <tr>
                <td>
                    <img id="ima" src="imagens/img.xbacon.jpg" width="130" height="100">
                </td>
                <td>
                    <b id="titulocardapio">X-BACON</b><br><br>
                    <label id="textocardapio"><b><i>Ingredientes:</i></b>Pão bola, hamburguer, tomate, alface,
                        bacon, queijo e presunto</label>
                </td>
                <td width="100" height="100" align="center">
                    <label><b>R$ 15,00</b></label><BR>
                    <input class="btn btn-yellow" type="button" value="  +  ">
                    <input class="btn btn-red" type="button" value="  -  ">
                </td>
            </tr>
        </table>
        <br>
        <table class="tab" width="600" height="90">
            <tr>
                <td>
                    <img id="ima" src="imagens/img.xfrango.png" width="130" height="100">
                </td>
                <td>
                    <b id="titulocardapio">X-FRANGO</b><br><br>
                    <label id="textocardapio"><b><i>Ingredientes:</i></b>Pão bola, hamburguer, tomate, alface,
                        frango, queijo e presunto</label>
                </td>
                <td width="100" height="100" align="center">
                    <label><b>R$ 15,00</b></label><BR>
                    <input class="btn btn-yellow" type="button" value="  +  ">
                    <input class="btn btn-red" type="button" value="  -  ">
                </td>
            </tr>
        </table>
        <br>
        <table class="tab" width="600" height="90">
            <tr>
                <td>
                    <img id="ima" src="imagens/img.xcarnesol.jpg" width="130" height="100">
                </td>
                <td>
                    <b id="titulocardapio">X-CARNE DE SOL</b><br><br>
                    <label id="textocardapio"><b><i>Ingredientes:</i></b>Pão bola, hamburguer, tomate, alface, carne de
                        sol, queijo e presunto
                    </label>
                </td>
                <td width="100" height="100" align="center">
                    <label><b>R$ 15,00</b></label><BR>
                    <input class="btn btn-yellow" type="button" value="  +  ">
                    <input class="btn btn-red" type="button" value="  -  ">
                </td>
            </tr>
        </table>
        <br>
        <table class="tab" width="600" height="90">
            <tr>
                <td>
                    <img id="ima" src="imagens/img.xtanajura.png" width="130" height="100">
                </td>
                <td>
                    <b id="titulocardapio">X-TANAJURA (SAZONAL)</b><br><br>
                    <label id="textocardapio"><b><i>Ingredientes:</i></b>Pão bola, hamburguer, tomate, alface, tanajura,
                        queijo e presunto</label>
                </td>
                <td width="100" height="100" align="center">
                    <label><b>R$ 15,00</b></label><BR>
                    <input class="btn btn-yellow" type="button" value="  +  ">
                    <input class="btn btn-red" type="button" value="  -  ">
                </td>
            </tr>
        </table>

        <br>

        <table class="tab" width="600" height="90">
            <tr>
                <td>
                    <img id="ima" src="imagens/img.passacarne.png" width="130" height="100">
                </td>
                <td>
                    <b id="titulocardapio">PASSAPORTE DE CARNE</b><br><br>
                    <label id="textocardapio"><b><i>Ingredientes:</i></b>Pão seda, salsicha,
                        tomate, ervilha, carne moída, milho, catchup, maionese</label>
                </td>
                <td width="100" height="100" align="center">
                    <label><b>R$ 15,00</b></label><BR>
                    <input class="btn btn-yellow" type="button" value="  +  ">
                    <input class="btn btn-red" type="button" value="  -  ">
                </td>
            </tr>
        </table>
        <br>

        <table class="tab" width="600" height="90">
            <tr>
                <td>
                    <img id="ima" src="imagens/img.passafrango.png" width="130" height="100">
                </td>
                <td>
                    <b id="titulocardapio">PASSAPORTE DE FRANGO</b><br><br>
                    <label id="textocardapio"><b><i>Ingredientes:</i></b>Pão seda, salsicha,
                        tomate, ervilha, frango desfiado, milho, catchup, maionese</label>
                </td>
                <td width="100" height="100" align="center">
                    <label><b>R$ 15,00</b></label><BR>
                    <input class="btn btn-yellow" type="button" value="  +  ">
                    <input class="btn btn-red" type="button" value="  -  ">
                </td>
            </tr>
        </table>
        <br>

        <table class="tab" width="600" height="90">
            <tr>
                <td>
                    <img id="ima" src="imagens/img.passacharque.jpg" width="130" height="100">
                </td>
                <td>
                    <b id="titulocardapio">PASSAPORTE DE CHARQUE</b><br><br>
                    <label id="textocardapio"><b><i>Ingredientes:</i></b>Pão seda, salsicha,
                        tomate, ervilha, charque desfiado, milho, catchup, maionese</label>
                </td>
                <td width="100" height="100" align="center">
                    <label><b>R$ 15,00</b></label><BR>
                    <input class="btn btn-yellow" type="button" value="  +  ">
                    <input class="btn btn-red" type="button" value="  -  ">
                </td>
            </tr>
        </table>
        <br>
    </div>


    <div id="escolhidoscardapio" align="center">
        <table width=200 height=50 border="1">
            <caption><b>Ingredientes Escolhidos</b></caption>
            <br>

            <tr>
                <td>Sanduiches</td>
                <td width=10 height=10>Ingredientes</td>
            </tr>

            <tr>
                <td><input type="text" name="tipopao"></td>
                <td width=10 height=10><input type="text"></td>
            </tr>

            <tr>
                <td><input type="text" name="tiporecheio"></td>
                <td width=10 height=10><input type="text"></td>
            </tr>

            <tr>
                <td><input type="text" name="tipomolho"></td>
                <td width=10 height=10><input type="text"></td>
            </tr>

            <tr>
                <td><input type="text" name="bebida"></td>
                <td width=10 height=10><input type="text"></td>
            </tr>

            <table align="center"><br>

                <tr>
                    <td align="center"><input class="btn btn-yellow" type="button" value="Limpar"></td>
                    <td><input class="btn btn-green" type="button"
                               onclick="window.location.href  = 'paginaPagamento.html'" value="Finalizar a compra"></td>
                </tr>

            </table>

        </table>

    </div>

    <div id="rodape">
        <img id="imgrodape" src="imagens/img.sejaochef.png" align="center">
        <b>CONTATOS: (82) 91111 - 2222 / sejachef@gmail.com</b>
    </div>


</div>

</body>
</html>
