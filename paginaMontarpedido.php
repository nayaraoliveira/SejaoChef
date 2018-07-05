<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8"/>
    <title>SejaChef</title>
    <link rel="stylesheet" type="text/css" href="css/CSSpagina.css">
    <link rel="stylesheet" type="text/css" href="css/CSSpaginaMontar.css">
    <link rel="shortcut icon" type="image/x-icon" href="imagens/favicon.ico">
	<form id="formulario" name="entrar" action="paginaMontarpedido.php" method="GET">
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
      
<div id="ttmontar">

    <div id="montagem" align="left" background-color: "rgba(0,100,0,0.3)";>
    <h3>Escolha seus Ingredientes!</h3>
    <br>

    <table width=800 height=150>

        <caption><b>Tipos de pães</b></caption>
        <tr>
            <td><img id="imgcard" src="imagens/img.paotrigo.jpg" align="center"></td>

            <td><img id="imgcard" src="imagens/img.paoseda.jpg" align="center"></td>

            <td><img id="imgcard" src="imagens/img.paoaveia.jpg" align="center"></td>

            <td><img id="imgcard" src="imagens/img.paoburguer.jpg" align="center"></td>

            <td><img id="imgcard" src="imagens/img.paodeforma.jpg" align="center"></td>
        </tr>

        <tr class="color">
            <td><label><b>Pão de trigo</b></label></td>

            <td><label><b>Pão de seda</b></label></td>

            <td><label><b>Pão de aveia</b></label></td>

            <td><label><b>Pão de burguer</b></label></td>

            <td><label><b>Pão de forma</b></label></td>

        </tr>

        <tr>
            <td><button class="btn btn-orange"  name="paotrigo">     Valor: R$ 1,00    </button></td>
			<td><button class="btn btn-orange"  name="paoceda">     Valor: R$ 1,00    </button></td>
			<td><button class="btn btn-orange"  name="paoaveia">     Valor: R$ 1,00    </button></td>
			<td><button class="btn btn-orange"  name="paoburguer">     Valor: R$ 1,00    </button></td>
			<td><button class="btn btn-orange" type=" submit" value="1" name="paoforma">     Valor: R$ 1,00    </button></td>

    </table>
    

	<?php
			$pao_escolhido='';
			$quant_pao='0';
			
			if(isset($_GET['paotrigo'])){
			$pao_escolhido='Pão Trigo';
			$quant_pao=1;
			}
			if(isset($_GET['paoceda'])){
			$pao_escolhido='Pão Ceda';
			$quant_pao=1;
			}
			if(isset($_GET['paoaveia'])){
			$pao_escolhido='Pão Aveia';
			$quant_pao=1;
			}
			if(isset($_GET['paoburguer'])){
			$pao_escolhido='Pão Burguer';
			$quant_pao=1;
			}
			if(isset($_GET['paoforma'])){
			$pao_escolhido='Pão Forma';
			$quant_pao=1;
			}
			
		
	?>
	
	
    <table width=800 height=150>

        <caption><b>Tipos de recheio</b></caption>
        <!-- Fila 1-->
        <tr>
            <td><img id="imgcard" src="imagens/img.carnemoida.jpg" align="center"></td>

            <td><img id="imgcard" src="imagens/img.salsicha.jpg" align="center"></td>

            <td><img id="imgcard" src="imagens/img.salsichamolho.jpg" align="center"></td>

            <td><img id="imgcard" src="imagens/img.atum.jpg" align="center"></td>

            <td><img id="imgcard" src="imagens/img.camarao.jpg" align="center"></td>
        </tr>

        <tr class="color">
            <td><label><b>Carne moída</b></label></td>

            <td><label><b>Salsicha</b></label></td>

            <td><label><b>Salsicha c/ molho</b></label></td>

            <td><label><b>Atum</b></label></td>

            <td><label><b>Camarão</b></label></td>

        </tr>

        <tr>
            <td><button class="btn btn-orange" value="1" name="carnemoida">     Valor: R$ 2,00    </button></td>
			<td><button class="btn btn-orange" value="1" name="salsicha">     Valor: R$ 2,00    </button></td>
			<td><button class="btn btn-orange" value="1" name="salsichamolho">     Valor: R$ 2,00    </button></td>
			<td><button class="btn btn-orange" value="1" name="atum">     Valor: R$ 2,00    </button></td>
			<td><button class="btn btn-orange" value="1" name="camarao">     Valor: R$ 2,00    </button></td>

        </tr>
        <br><br>
		<?php
			
			$recheio1='';
			$quant1=0;
			if(isset($_GET['carnemoida'])){
			$recheio1='Carne Moida';
			$quant1+=1;
			}
			if(isset($_GET['salsicha'])){
			$recheio1='Salsicha';
			$quant1+=1;
			}
			if(isset($_GET['salsichamolho'])){
			$recheio1='Salsicha ao Molho';
			$quant1+=1;
			}
			if(isset($_GET['atum'])){
			$recheio1='Atum';
			$quant1+=1;
			}
			if(isset($_GET['camarao'])){
			$recheio1='Camarão';
			$quant1+=1;
			}
			
		
	?>
        <!-- Fila 2-->
        <tr>
            <td><img id="imgcard" src="imagens/img.alcatra.jpg" align="center"></td>

            <td><img id="imgcard" src="imagens/img.calabresa.png" align="center"></td>

            <td><img id="imgcard" src="imagens/img.frango.jpg" align="center"></td>

            <td><img id="imgcard" src="imagens/img.bacon.jpg" align="center"></td>

            <td><img id="imgcard" src="imagens/img.ovo.jpg" align="center"></td>
        </tr>

        <tr class="color">
            <td><label><b>Alcatra</b></label></td>

            <td><label><b>Calabresa</b></label></td>

            <td><label><b>Frango</b></label></td>

            <td><label><b>Bacon</b></label></td>

            <td><label><b>Ovo</b></label></td>

        </tr>

        <tr>
			<td><button class="btn btn-orange" value="1" name="alcatra">     Valor: R$ 2,00    </button></td>
			<td><button class="btn btn-orange" value="1" name="calabresa">     Valor: R$ 2,00    </button></td>
			<td><button class="btn btn-orange" value="1" name="frango">     Valor: R$ 2,00    </button></td>
			<td><button class="btn btn-orange" value="1" name="bacon">     Valor: R$ 2,00    </button></td>
			<td><button class="btn btn-orange" value="1" name="ovo">     Valor: R$ 2,00    </button></td>

        </tr>
		<?php
			$recheio2='';
			$quant2=0;
			if(isset($_GET['alcatra'])){
			$recheio2='alcatra';
			$quant2+=1;
			}
			if(isset($_GET['calabresa'])){
			$recheio2='calabresa';
			$quant2+=1;
			}
			if(isset($_GET['frango'])){
			$recheio2='frango';
			$quant2+=1;
			}
			if(isset($_GET['bacon'])){
			$recheio2='bacon';
			$quant2+=1;
			}
			if(isset($_GET['ovo'])){
			$recheio2='ovo';
			$quant2+=1;
			}
		?>
        <!-- Fila 3
        <tr>
            <td><img id="imgcard" src="imagens/img.tanajura.jpg" align="center"></td>

            <td><img id="imgcard" src="imagens/img.sol.jpg" align="center"></td>

            <td><img id="imgcard" src="imagens/img.coracao.jpg" align="center"></td>

            <td><img id="imgcard" src="imagens/img.peru.jpg" align="center"></td>

            <td><img id="imgcard" src="imagens/img.charque.jpg" align="center"></td>
        </tr>

        <tr class="color">
            <td><label><b>Tanajura*</b></label></td>

            <td><label><b>Carne de Sol</b></label></td>

            <td><label><b>Coração</b></label></td>

            <td><label><b>Peru</b></label></td>

            <td><label><b>Charque</b></label></td>

        </tr>

        <tr>
			<td><button class="btn btn-green" value="1" name="tanajura">     Valor: R$ 2,00    </button></td>
			<td><button class="btn btn-green" value="1" name="carnedesol">     Valor: R$ 2,00    </button></td>
			<td><button class="btn btn-green" value="1" name="coracao">     Valor: R$ 2,00    </button></td>
			<td><button class="btn btn-green" value="1" name="peru">     Valor: R$ 2,00    </button></td>
			<td><button class="btn btn-green" value="1" name="charque">     Valor: R$ 2,00    </button></td>
        </tr>-->
    </table>
    <br><br>

    <table width=800 height=150>

        <caption><b>Tipos de molhos</b></caption>
        <!--Fila 1 -->
        <tr>
            <td><img id="imgcard" src="imagens/img.maionese.jpg" align="center"></td>

            <td><img id="imgcard" src="imagens/img.cenoura.jpg" align="center"></td>

            <td><img id="imgcard" src="imagens/img.alho.png" align="center"></td>

            <td><img id="imgcard" src="imagens/img.barbecue.jpg" align="center"></td>

            <td><img id="imgcard" src="imagens/img.azeitona1.jpg" align="center"></td>
        </tr>

        <tr class="color">
            <td><label><b>Maionese</b></label></td>

            <td><label><b>Maionese de cenoura</b></label></td>

            <td><label><b>Alho</b></label></td>

            <td><label><b>Barbecue</b></label></td>

            <td><label><b>Azeitona</b></label></td>

        </tr>

        <tr>
            <td><input class="btn btn-orange" type="submit" name="maionese" value="     Valor: R$ 1,00    "></td>

            <td><input class="btn btn-orange" type="submit" name="maionese_cenoura" value="     Valor: R$ 1,00    "></td>

            <td><input class="btn btn-orange" type="submit" name="maionese_alho" value="     Valor: R$ 1,00    "></td>

            <td><input class="btn btn-orange" type="submit" name="barbecue" value="     Valor: R$ 1,00    "></td>

            <td><input class="btn btn-orange" type="submit" name="azeitona" value="     Valor: R$ 1,00    "></td>
		</tr>
		
		<?php
			$molho='';
			$quant_molho=0;
			if(isset($_GET['maionese'])){
			$molho='maionese';
			$quant_molho+=1;
			}
			if(isset($_GET['maionese_cenoura'])){
			$molho='Maionese Cenoura';
			$quant_molho+=1;
			}
			if(isset($_GET['maionese_alho'])){
			$molho='Maionese Alho';
			$quant_molho+=1;
			}
			if(isset($_GET['barbecue'])){
			$molho='barbecue';
			$quant_molho+=1;
			}
			if(isset($_GET['azeitona'])){
			$molho='Maionese Azeitona';
			$quant_molho+=1;
			}
		?>
        <!--Fila 2

        <tr>
            <td><img id="imgcard" src="imagens/img.catchup.jpg" align="center"></td>

            <td><img id="imgcard" src="imagens/img.mostarda.jpg" align="center"></td>

            <td><img id="imgcard" src="imagens/img.pimenta.jpg" align="center"></td>

            <td><img id="imgcard" src="imagens/img.parmesao.jpg" align="center"></td>

            <td><img id="imgcard" src="imagens/img.agridoce.jpg" align="center"></td>
        </tr>

        <tr class="color">
            <td><label><b>Catchup</b></label></td>

            <td><label><b>Mostarda</b></label></td>

            <td><label><b>Pimenta</b></label></td>

            <td><label><b>Parmesão</b></label></td>

            <td><label><b>Cebola agridoce</b></label></td>

        </tr>

        <tr>
            <td><input class="btn btn-orange" type="submit" value="     Valor: R$ 1,00    "></td>

            <td><input class="btn btn-orange" type="submit" value="     Valor: R$ 1,00    "></td>

            <td><input class="btn btn-orange" type="submit" value="     Valor: R$ 1,00    "></td>

            <td><input class="btn btn-orange" type="submit" value="     Valor: R$ 1,00    "></td>

            <td><input class="btn btn-orange" type="submit" value="     Valor: R$ 1,00    "></td>
        </tr>-->
    </table>
    <br><br>

    <table width=800 height=150>

        <caption><b>Frios</b></caption>
        <!--Fila 1 -->
        <tr>
            <td><img id="imgcard" src="imagens/img.mussarela.jpg" align="center"></td>

            <td><img id="imgcard" src="imagens/img.cheddar.jpg" align="center"></td>

            <td><img id="imgcard" src="imagens/img.coalho.jpg" align="center"></td>

            <td><img id="imgcard" src="imagens/img.prato.jpg" align="center"></td>

            <td><img id="imgcard" src="imagens/img.gorgonzola.jpg" align="center"></td>
        </tr>

        <tr class="color">
            <td><label><b>Mussarela</b></label></td>

            <td><label><b>Cheddar</b></label></td>

            <td><label><b>Coalho</b></label></td>

            <td><label><b>Prato</b></label></td>

            <td><label><b>Gorgonzola</b></label></td>

        </tr>

        <tr>
            <td><input class="btn btn-orange" type="button" value="     Valor: R$ 1,00    "></td>

            <td><input class="btn btn-orange" type="button" value="     Valor: R$ 1,00    "></td>

            <td><input class="btn btn-orange" type="button" value="     Valor: R$ 1,00    "></td>

            <td><input class="btn btn-orange" type="button" value="     Valor: R$ 1,00    "></td>

            <td><input class="btn btn-orange" type="button" value="     Valor: R$ 1,00    "></td>
        </tr>

        <!--Fila 2

        <tr>
            <td><img id="imgcard" src="imagens/img.catupiry.jpg" align="center"></td>

            <td><img id="imgcard" src="imagens/img.presunto.jpg" align="center"></td>

            <td><img id="imgcard" src="imagens/img.salaminho.jpg" align="center"></td>

        </tr>

        <tr class="color">
            <td><label><b>Catupiry</b></label></td>

            <td><label><b>Presunto</b></label></td>

            <td><label><b>Salaminho</b></label></td>

        </tr>

        <tr>
            <td><input class="btn btn-orange" type="button" value="     Valor: R$ 1,00    "></td>

            <td><input class="btn btn-orange" type="button" value="     Valor: R$ 1,00    "></td>

            <td><input class="btn btn-orange" type="button" value="     Valor: R$ 1,00    "></td>
        </tr>-->
    </table>
    <br><br>

    <table width=800 height=150>

        <caption><b>Hamburguer</b></caption>
        <!--Fila 1 -->
        <tr>
            <td><img id="imgcard" src="imagens/img.hcarne.jpg" align="center"></td>

            <td><img id="imgcard" src="imagens/img.hsoja.jpg" align="center"></td>

            <td><img id="imgcard" src="imagens/img.hfrango.jpg" align="center"></td>

            <td><img id="imgcard" src="imagens/img.hcaseiro.jpg" align="center"></td>

            <td><img id="imgcard" src="imagens/img.hmisto.jpg" align="center"></td>
        </tr>

        <tr class="color">
            <td><label><b>Carne</b></label></td>

            <td><label><b>Soja</b></label></td>

            <td><label><b>Frango</b></label></td>

            <td><label><b>Caseiro</b></label></td>

            <td><label><b>Misto</b></label></td>

        </tr>

        <tr>
            <td><input class="btn btn-orange" type="button" value="     Valor: R$ 4,00    "></td>

            <td><input class="btn btn-orange" type="button" value="     Valor: R$ 4,00    "></td>

            <td><input class="btn btn-orange" type="button" value="     Valor: R$ 4,00    "></td>

            <td><input class="btn btn-orange" type="button" value="     Valor: R$ 4,00    "></td>

            <td><input class="btn btn-orange" type="button" value="     Valor: R$ 4,00    "></td>
        </tr>

    </table>
    <br><br>

    <table width=800 height=150>

        <caption><b>Salada</b></caption>
        <!--Fila 1 -->
        <tr>
            <td><img id="imgcard" src="imagens/img.tomate.jpg" align="center"></td>

            <td><img id="imgcard" src="imagens/img.tomateseco.jpg" align="center"></td>

            <td><img id="imgcard" src="imagens/img.alface.jpg" align="center"></td>

            <td><img id="imgcard" src="imagens/img.cebolacaramelo.jpg" align="center"></td>

            <td><img id="imgcard" src="imagens/img.cebola.jpg" align="center"></td>
        </tr>

        <tr class="color">
            <td><label><b>Tomate</b></label></td>

            <td><label><b>Tomate seco</b></label></td>

            <td><label><b>Alface</b></label></td>

            <td><label><b>Cebola caramelizada</b></label></td>

            <td><label><b>Cebola</b></label></td>

        </tr>

        <tr>
            <td><input class="btn btn-orange" type="button" value="     Valor: R$ 4,00    "></td>

            <td><input class="btn btn-orange" type="button" value="     Valor: R$ 4,00    "></td>

            <td><input class="btn btn-orange" type="button" value="     Valor: R$ 4,00    "></td>

            <td><input class="btn btn-orange" type="button" value="     Valor: R$ 4,00    "></td>

            <td><input class="btn btn-orange" type="button" value="     Valor: R$ 4,00    "></td>
        </tr>
<!-- Fila 2 
        <tr>
            <td><img id="imgcard" src="imagens/img.cenourar.jpg" align="center"></td>

            <td><img id="imgcard" src="imagens/img.pepino.png" align="center"></td>

            <td><img id="imgcard" src="imagens/img.gergelim.jpg" align="center"></td>

            <td><img id="imgcard" src="imagens/img.rucula.jpg" align="center"></td>

            <td><img id="imgcard" src="imagens/img.alhoporo.jpg" align="center"></td>
        </tr>

        <tr class="color">
            <td><label><b>Cenoura ralada</b></label></td>

            <td><label><b>Pepino</b></label></td>

            <td><label><b>Gergilim</b></label></td>

            <td><label><b>Rúcula</b></label></td>

            <td><label><b>Alho poró</b></label></td>

        </tr>

        <tr>
            <td><input class="btn btn-orange" type="button" value="     Valor: R$ 4,00    "></td>

            <td><input class="btn btn-orange" type="button" value="     Valor: R$ 4,00    "></td>

            <td><input class="btn btn-orange" type="button" value="     Valor: R$ 4,00    "></td>

            <td><input class="btn btn-orange" type="button" value="     Valor: R$ 4,00    "></td>

            <td><input class="btn btn-orange" type="button" value="     Valor: R$ 4,00    "></td>
        </tr> -->

    </table><br><br>

    <table width=800 height=150>

        <caption><b>Outros</b></caption>
        <!--Fila 1 -->
        <tr>
            <td><img id="imgcard" src="imagens/img.milho1.jpg" align="center"></td>

            <td><img id="imgcard" src="imagens/img.ervilha1.jpg" align="center"></td>

            <td><img id="imgcard" src="imagens/img.palha.jpg" align="center"></td>

            <td><img id="imgcard" src="imagens/img.azeitona1.jpg" align="center"></td>

            <td><img id="imgcard" src="imagens/img.queijoralado.jpg" align="center"></td>
        </tr>

        <tr class="color">
            <td><label><b>Milho</b></label></td>

            <td><label><b>Ervilha</b></label></td>

            <td><label><b>Batata palha</b></label></td>

            <td><label><b>Azeitona</b></label></td>

            <td><label><b>Queijo ralado</b></label></td>

        </tr>

        <tr>
            <td><input class="btn btn-orange" type="button" value="     Valor: R$ 4,00    "></td>

            <td><input class="btn btn-orange" type="button" value="     Valor: R$ 4,00    "></td>

            <td><input class="btn btn-orange" type="button" value="     Valor: R$ 4,00    "></td>

            <td><input class="btn btn-orange" type="button" value="     Valor: R$ 4,00    "></td>

            <td><input class="btn btn-orange" type="button" value="     Valor: R$ 4,00    "></td>
        </tr>
        <!-- Fila 2
        <tr>
            <td><img id="imgcard" src="imagens/img.amendoim.jpg" align="center"></td>

            <td><img id="imgcard" src="imagens/img.requeijao.jpg" align="center"></td>

            <td><img id="imgcard" src="imagens/img.gergelim.jpg" align="center"></td>

            <td><img id="imgcard" src="imagens/img.rucula.jpg" align="center"></td>

            <td><img id="imgcard" src="imagens/img.batatafrita.jpg" align="center"></td>
        </tr>

        <tr class="color">
            <td><label><b>Amendoim torrado</b></label></td>

            <td><label><b>Requeijão</b></label></td>

            <td><label><b>Pimenta de cheiro</b></label></td>

            <td><label><b>Manjericão</b></label></td>

            <td><label><b>Batata Frita</b></label></td>

        </tr>

        <tr>
            <td><input class="btn btn-orange" type="button" value="     Valor: R$ 4,00    "></td>

            <td><input class="btn btn-orange" type="button" value="     Valor: R$ 4,00    "></td>

            <td><input class="btn btn-orange" type="button" value="     Valor: R$ 4,00    "></td>

            <td><input class="btn btn-orange" type="submit" name="manjericão" value="     Valor: R$ 4,00    "></td>

            <td><input class="btn btn-orange" type="submit" name="batata" value="     Valor: R$ 4,00    "></td>
        </tr>-->

    </table>
	<?php 
		if(isset($_GET['manjericão'])){
			$recheio1='manjericão';
			$quant1+=1;
			}
		if(isset($_GET['batata'])){
			$recheio2='batata-frita';
			$quant2+=1;
			}
			?>
    <!--
     </div> -->

    <div id="escolhidos" align="center">

        <table width=130 height=50 >
            <caption><b>Ingredientes Escolhidos</b></caption>
            <br>
            <tr>
			<td>
				<b>Opções</b></td>
                <td><b>Ingrediente</b></td>
                <td><b>Quantidade</b></td>
                <td></td>
            </tr>
            <tr>
				<td>PÃO-</td>
                <td size="20"><a><?php echo $pao_escolhido?></a></td>
                <td><a><?php echo $quant_pao?></a></td>
                <td><button class=" btn btn-red">    X   </button></td>
            </tr>
            <tr>
				<td>RECHEIO1-</td>
                <td><a><?php echo $recheio1?></a></td>
                <td><a><?php echo $quant1?></a></td>
                <td><button class=" btn btn-red">    X   </button></td>
            </tr>
            <tr>
				<td>RECHEIO2-</td>
                <td><a><?php echo $recheio2?></a></td>
                <td><a><?php echo $quant2?></a></td>                      
                <td><button class="btn btn-red">    X   </button></td>
            </tr>
            <tr>
				<td>MOLHO-</td>
                <td><a><?php echo $molho?></a></td>
                <td><a><?php echo $quant_molho?></a></td>
                <td><button class=" btn btn-red">    X   </button></td>
            </tr>

            <table align="center">
                <br>
                <tr>
                    <td>Valor Total</td>
                    <td align="rigth"><input type="text" size="7" maxlength="8"></td>
                </tr>
                <tr>
                    <td align="center"><input class="btn btn-red" type="button" value="Cancelar"></td>
                    <td><input class="btn btn-green" type="button"
                               onclick="window.location.href  = 'paginaPagamento.html'"
                               value="Finalizar a compra"></td>
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
