<?php
session_start();
?>

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
          
      </nav><br><br><br>

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
                    <input type="text" size="4"><br>
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
                    <input type="text" size="4"><br>
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
                    <input type="text" size="4"><br>
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
                    <input type="text" size="4"><br>
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
                    <input type="text" size="4"><br>
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
                    <input type="text" size="4"><br>
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
                    <input type="text" size="4"><br>
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
                    <input type="text" size="4"><br>
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
