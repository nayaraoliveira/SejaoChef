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
             <?php
              
              if(isset($_GET['deslogar'])){
                 $_SESSION['nome']=NULL;
              }
            
		if (@$_SESSION['nome']==NULL){
                  $nome='Faça seu login!';
              }else{$nome=$_SESSION['nome'];}
              ?>
              <label id="tec"><i><a href="paginaLogin.php"><?php echo $nome?></a></i></label>
              <ul>
                <li><a href="paginaMeusPedidos.php">Meus Pedidos</a></li>
                <li><button class="btn btn-orange" type="submit" name="deslogar">     Sair    </button></li>
                
              </ul>

            </li>
    </ul>   
          
      </nav>
      
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
			<td><button class="btn btn-orange"  name="paoforma">     Valor: R$ 1,00    </button></td>

    </table>
    

	<?php
			
			if (@$_SESSION['pao']==NULL){
				$pao_escolhido=NULL;
			}
			else{
				$pao_escolhido=$_SESSION['pao'];
			}
			
			
			if(isset($_GET['paotrigo'])){
			$pao_escolhido='Pão Trigo';
			$valor_pao=1;
			}
			if(isset($_GET['paoceda'])){
			$pao_escolhido='Pão Seda';
			//$valor_pao=1;
			}
			if(isset($_GET['paoaveia'])){
			$pao_escolhido='Pão Aveia';
			//$valor_pao=1;
			}
			if(isset($_GET['paoburguer'])){
			$pao_escolhido='Pão Burguer';
			//$valor_pao=1;
			}
			if(isset($_GET['paoforma'])){
			$pao_escolhido='Pão Forma';
			//$valor_pao=1.00;
			}
			
			$_SESSION['pao']=$pao_escolhido;
			
            
            @$link=mysqli_connect('db4free.net:3306','sejaochef','123456789','sejaochef');


            @$query = "SELECT valor FROM ingredientes WHERE ingredientes.nome='$pao_escolhido'";
            @$busca = mysqli_query(@$link,@$query);
            @$dado = mysqli_fetch_array(@$busca);
            
            $_SESSION['valor_pao'] = $dado['valor'];
    			
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
            <td><button class="btn btn-orange" name="carnemoida">     Valor: R$ 2,00    </button></td>
			<td><button class="btn btn-orange" name="salsicha">     Valor: R$ 2,00    </button></td>
			<td><button class="btn btn-orange" name="salsichamolho">     Valor: R$ 2,00    </button></td>
			<td><button class="btn btn-orange" name="atum">     Valor: R$ 2,00    </button></td>
			<td><button class="btn btn-orange" name="camarao">     Valor: R$ 2,00    </button></td>

        </tr>
        <br><br>
		<?php
			
			if(isset($_GET['carnemoida'])){
			$recheio='Carne Moida';
			}
			if(isset($_GET['salsicha'])){
			$recheio='Salsicha';
			}
			if(isset($_GET['salsichamolho'])){
			$recheio='Salsicha ao Molho';
			}
			if(isset($_GET['atum'])){
			$recheio='Atum';
			}
			if(isset($_GET['camarao'])){
			$recheio='Camarão';
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
			<td><button class="btn btn-orange" name="alcatra">     Valor: R$ 2,00    </button></td>
			<td><button class="btn btn-orange" name="calabresa">     Valor: R$ 2,00    </button></td>
			<td><button class="btn btn-orange" name="frango">     Valor: R$ 2,00    </button></td>
			<td><button class="btn btn-orange" name="bacon">     Valor: R$ 2,00    </button></td>
			<td><button class="btn btn-orange" name="ovo">     Valor: R$ 2,00    </button></td>

        </tr>
		<?php
			
			if(isset($_GET['alcatra'])){
			$recheio='Alcatra';
			}
			if(isset($_GET['calabresa'])){
			$recheio='Calabresa';
			}
			if(isset($_GET['frango'])){
			$recheio='Frango';
			}
			if(isset($_GET['bacon'])){
			$recheio='Bacon';
			}
			if(isset($_GET['ovo'])){
			$recheio='Ovo';
			}
											
		?>
        <!-- Fila 3-->
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
			<td><button class="btn btn-green" type="submit" name="tanajura">     Valor: R$ 2,00    </button></td>
			<td><button class="btn btn-green" type="submit" name="carnedesol">     Valor: R$ 2,00    </button></td>
			<td><button class="btn btn-green" type="submit" name="coracao">     Valor: R$ 2,00    </button></td>
			<td><button class="btn btn-green" type="submit" name="peru">     Valor: R$ 2,00    </button></td>
			<td><button class="btn btn-green" type="submit" name="charque">     Valor: R$ 2,00    </button></td>
        </tr>
    </table>
    <?php
            
            if(isset($_GET['tanajura'])){
            $recheio='Tanajura';
            }
            if(isset($_GET['carnedesol'])){
            $recheio='Carne de Sol';
            }
            if(isset($_GET['coracao'])){
            $recheio='Coração';
            }
            if(isset($_GET['peru'])){
            $recheio='Peru';
            }
            if(isset($_GET['charque'])){
            $recheio='Charque';
            }
                                            
        ?>
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
            <td><input class="btn btn-orange" type="submit" name="molho_maionese" value="     Valor: R$ 1,00    "></td>

            <td><input class="btn btn-orange" type="submit" name="molho_maionese_cenoura" value="     Valor: R$ 1,00    "></td>

            <td><input class="btn btn-orange" type="submit" name="molho_maionese_alho" value="     Valor: R$ 1,00    "></td>

            <td><input class="btn btn-orange" type="submit" name="molho_barbecue" value="     Valor: R$ 1,00    "></td>

            <td><input class="btn btn-orange" type="submit" name="molho_azeitona" value="     Valor: R$ 1,00    "></td>
		</tr>
		
		<?php
            
            if(isset($_GET['molho_maionese'])){
            $molho='Maionese';
            }
            if(isset($_GET['molho_maionese_cenoura'])){
            $molho='Maionese de Cenoura';
            }
            if(isset($_GET['molho_maionese_alho'])){
            $molho='Maionese de Alho';
            }
            if(isset($_GET['molho_barbecue'])){
            $molho='Barbecue';
            }
            if(isset($_GET['molho_azeitona'])){
            $molho='Molho de Azeitona';
            }
                                            
        ?>
        <!--Fila 2-->

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

            <td><label><b>Molho de Pimenta</b></label></td>

            <td><label><b>Molho Parmesão</b></label></td>

            <td><label><b>Molho Cebola agridoce</b></label></td>

        </tr>

        <tr>
            <td><input class="btn btn-orange" type="submit" name="molho_catchup" value="     Valor: R$ 1,00    "></td>
            <td><input class="btn btn-orange" type="submit" name="molho_mostarda" value="     Valor: R$ 1,00    "></td>

            <td><input class="btn btn-orange" type="submit" name="molho_pimenta" value="     Valor: R$ 1,00    "></td>

            <td><input class="btn btn-orange" type="submit" name="molho_parmesão" value="     Valor: R$ 1,00    "></td>

            <td><input class="btn btn-orange" type="submit" name="molho_cebola_agridoce" value="     Valor: R$ 1,00    "></td>
        </tr>
    </table>
    <?php
            
            if(isset($_GET['molho_catchup'])){
            $molho='Catchup';
            }
            if(isset($_GET['molho_mostarda'])){
            $molho='Molho de Mostarda';
            }
            if(isset($_GET['molho_pimenta'])){
            $molho='Molho de Pimenta';
            }
            if(isset($_GET['molho_parmesão'])){
            $molho='Molho de Parmesão';
            }
            if(isset($_GET['molho_cebola_agridoce'])){
            $molho='Molho Cebola Agridoce';
            }
                                                        
        ?>
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
            <td><input class="btn btn-orange" type="submit" name="mussarela" value="     Valor: R$ 1,00    "></td>

            <td><input class="btn btn-orange" type="submit" name="cheddar" value="     Valor: R$ 1,00    "></td>

            <td><input class="btn btn-orange" type="submit" name="coalho" value="     Valor: R$ 1,00    "></td>

            <td><input class="btn btn-orange" type="submit" name="prato" value="     Valor: R$ 1,00    "></td>

            <td><input class="btn btn-orange" type="submit" name="gorgonzola" value="     Valor: R$ 1,00    "></td>
        </tr>
        <?php
            
            if(isset($_GET['mussarela'])){
            $frios='Queijo Mussarela';
            }
            if(isset($_GET['cheddar'])){
            $frios='Queijo Cheddar';
            }
            if(isset($_GET['coalho'])){
            $frios='Queijo Coalho';
            }
            if(isset($_GET['prato'])){
            $frios='Queijo Prato';
            }
            if(isset($_GET['gorgonzola'])){
            $frios='Queijo Gorgonzola';
            }
                                                        
        ?>
        <!--Fila 2-->

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
            <td><input class="btn btn-orange" name="catupiry" type="submit" value="     Valor: R$ 1,00    "></td>

            <td><input class="btn btn-orange" name="presunto" type="submit" value="     Valor: R$ 1,00    "></td>

            <td><input class="btn btn-orange" name="salaminho" type="submit" value="     Valor: R$ 1,00    "></td>
        </tr>
    </table>
    <?php
            
            if(isset($_GET['catupiry'])){
            $frios='Queijo Catupiry';
            }
            if(isset($_GET['presunto'])){
            $frios='Presunto';
            }
            if(isset($_GET['salaminho'])){
            $frios='Salaminho';
            }
                                                                    
        ?>
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
            <td><input class="btn btn-orange" type="submit" name="hamburguer_carne" value="     Valor: R$ 4,00    "></td>

            <td><input class="btn btn-orange" type="submit" name="hamburguer_soja" value="     Valor: R$ 4,00    "></td>

            <td><input class="btn btn-orange" type="submit" name="hamburguer_frango" value="     Valor: R$ 4,00    "></td>

            <td><input class="btn btn-orange" type="submit" name="hamburguer_caseiro" value="     Valor: R$ 4,00    "></td>

            <td><input class="btn btn-orange" type="submit" name="hamburguer_misto" value="     Valor: R$ 4,00    "></td>
        </tr>

    </table>
    <?php
            
            if(isset($_GET['hamburguer_carne'])){
            $recheio='Hamburguer Carne';
            }
            if(isset($_GET['hamburguer_soja'])){
            $recheio='Hamburguer Soja';
            }
            if(isset($_GET['hamburguer_frango'])){
            $recheio='Hamburguer Frango';
            }
            if(isset($_GET['hamburguer_caseiro'])){
            $recheio='Hamburguer Caseiro';
            }
            if(isset($_GET['hamburguer_misto'])){
            $recheio='Hamburguer Misto';
            }
                                                        
        ?>
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
            <td><input class="btn btn-orange" type="submit" name="tomate" value="     Valor: R$ 4,00    "></td>

            <td><input class="btn btn-orange" type="submit" name="tomate_seco" value="     Valor: R$ 4,00    "></td>

            <td><input class="btn btn-orange" type="submit" name="alface" value="     Valor: R$ 4,00    "></td>

            <td><input class="btn btn-orange" type="submit" name="cebola_caramelizada" value="     Valor: R$ 4,00    "></td>

            <td><input class="btn btn-orange" type="submit" name="cebola" value="     Valor: R$ 4,00    "></td>
        </tr>
        <?php
            
            if(isset($_GET['tomate'])){
            $salada='Tomate';
            }
            if(isset($_GET['tomate_seco'])){
            $salada='Tomate Seco';
            }
            if(isset($_GET['alface'])){
            $salada='Alface';
            }
            if(isset($_GET['cebola_caramelizada'])){
            $salada='Cebola Caramelizada';
            }
            if(isset($_GET['cebola'])){
            $salada='Cebola';
            }
                                                        
        ?>
<!-- Fila 2 -->
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
            <td><input class="btn btn-orange" type="submit" name="cenoura" value="     Valor: R$ 4,00    "></td>

            <td><input class="btn btn-orange" type="submit" name="pepino" value="     Valor: R$ 4,00    "></td>

            <td><input class="btn btn-orange" type="submit" name="gergelim" value="     Valor: R$ 4,00    "></td>

            <td><input class="btn btn-orange" type="submit" name="rucula" value="     Valor: R$ 4,00    "></td>

            <td><input class="btn btn-orange" type="submit" name="alho_poro" value="     Valor: R$ 4,00    "></td>
        </tr>

    </table>
    <?php
            
            if(isset($_GET['cenoura'])){
            $salada='Cenoura';
            }
            if(isset($_GET['pepino'])){
            $salada='Pepino';
            }
            if(isset($_GET['gergelim'])){
            $salada='Gergelim';
            }
            if(isset($_GET['rucula'])){
            $salada='Rucula';
            }
            if(isset($_GET['alho_poro'])){
            $salada='Alho Poró';
            }
                                                        
        ?>
    <br><br>

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
            <td><input class="btn btn-orange" type="submit" name="milho" value="     Valor: R$ 4,00    "></td>

            <td><input class="btn btn-orange" type="submit" name="ervilha" value="     Valor: R$ 4,00    "></td>

            <td><input class="btn btn-orange" type="submit" name="batata_palha" value="     Valor: R$ 4,00    "></td>

            <td><input class="btn btn-orange" type="submit" name=azeitona"" value="     Valor: R$ 4,00    "></td>

            <td><input class="btn btn-orange" type="submit" name="queijo_ralado" value="     Valor: R$ 4,00    "></td>
        </tr>
        <?php
            
            if(isset($_GET['milho'])){
            $outros='Milho';
            }
            if(isset($_GET['ervilha'])){
            $outros='Ervilha';
            }
            if(isset($_GET['batata_palha'])){
            $outros='Batata Palha';
            }
            if(isset($_GET['azeitona'])){
            $outros='Azeitona';
            }
            if(isset($_GET['queijo_ralado'])){
            $outros='Queijo Ralado';
            }
                                                        
        ?>
        <!-- Fila 2-->
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
            <td><input class="btn btn-orange" type="submit" name="amendoim_torrado" value="     Valor: R$ 4,00    "></td>

            <td><input class="btn btn-orange" type="submit" name="requeijao" value="     Valor: R$ 4,00    "></td>

            <td><input class="btn btn-orange" type="submit" name="pimenta_cheiro" value="     Valor: R$ 4,00    "></td>

            <td><input class="btn btn-orange" type="submit" name="manjericão" value="     Valor: R$ 4,00    "></td>

            <td><input class="btn btn-orange" type="submit" name="batata_frita" value="     Valor: R$ 4,00    "></td>
        </tr>


        </tr>
        <?php
            
            if(isset($_GET['amendoim_torrado'])){
            $outros='Amendoim Torrado';
            }
            if(isset($_GET['requeijao'])){
            $outros='Requeijão';
            }
            if(isset($_GET['pimenta_cheiro'])){
            $outros='Pimenta de Cheiro';
            }
            if(isset($_GET['manjericao'])){
            $outros='Manjericão';
            }
            if(isset($_GET['batata_frita'])){
            $outros='Batata Frita';
            }
                                                        
        ?>

    </table>
			
	<?php
	if($recheio!=NULL){
    @$link=mysqli_connect('db4free.net:3306','sejaochef','123456789','sejaochef');
	
    @$query2 = ("SELECT valor FROM ingredientes WHERE ingredientes.nome='$recheio'");

			@$busca2 = mysqli_query(@$link,@$query2);
			@$dado2 = mysqli_fetch_array(@$busca2);
			@$valor_recheio = @$dado2['valor'];

        
	
		if(@$_SESSION['recheio1']==NULL){
				$_SESSION['recheio1']=$recheio;
				$_SESSION['valor_recheio1']=$valor_recheio;
			}
			else{
				if(@$_SESSION['recheio2']==NULL){
					$_SESSION['recheio2']="$recheio";
					$_SESSION['valor_recheio2']=$valor_recheio;
				}
				else{
					if(@$_SESSION['recheio3']==NULL){
					$_SESSION['recheio3']="$recheio";
					$_SESSION['valor_recheio3']=$valor_recheio;
				}
					else{echo "Número máximo de recheio preenchido!";}
				}
			}
        }
	   
    	?>	
    


    <?php
    if($molho!=NULL){
    @$link=mysqli_connect('db4free.net:3306','sejaochef','123456789','sejaochef');
    
    @$query = ("SELECT valor FROM ingredientes WHERE ingredientes.nome='$molho'");

            @$busca = mysqli_query(@$link,@$query);
            @$dado = mysqli_fetch_array(@$busca);
            @$valor_molho = @$dado['valor'];

        
    
        if(@$_SESSION['molho1']==NULL){
                $_SESSION['molho1']=@"$molho";
                $_SESSION['valor_molho1']=@$valor_molho;
            }
            else{
                if(@$_SESSION['molho2']==NULL){
                    $_SESSION['molho2']=@"$molho";
                    $_SESSION['valor_molho2']=@$valor_molho;
                }
                else{
                    if(@$_SESSION['molho3']==NULL){
                    $_SESSION['molho3']=@"$molho";
                    $_SESSION['valor_molho3']=$valor_molho;
                }
                    else{echo "Número máximo de recheio preenchido!";}
                }
            }
        }
        ?>


        <?php
        if($frios!=NULL){
    @$link=mysqli_connect('db4free.net:3306','sejaochef','123456789','sejaochef');
    
    @$query = ("SELECT valor FROM ingredientes WHERE ingredientes.nome='$frios'");

            @$busca = mysqli_query(@$link,@$query);
            @$dado = mysqli_fetch_array(@$busca);
            @$valor_frios = @$dado['valor'];

        
    
        if(@$_SESSION['frios1']==NULL){
                $_SESSION['frios1']=@"$frios";
                $_SESSION['valor_frios1']=@$valor_frios;
            }
            else{
                if(@$_SESSION['frios2']==NULL){
                    $_SESSION['frios2']=@"$frios";
                    $_SESSION['valor_frios2']=@$valor_frios;
                }
                else{
                    if(@$_SESSION['frios3']==NULL){
                    $_SESSION['frios3']=@"$frios";
                    $_SESSION['valor_frios3']=@$valor_frios;
                }
                    else{echo "Número máximo de recheio preenchido!";}
                }
            }
        }
        ?>



        <?php
        if($salada!=NULL){
    @$link=mysqli_connect('db4free.net:3306','sejaochef','123456789','sejaochef');
    
    @$query = ("SELECT valor FROM ingredientes WHERE ingredientes.nome='$salada'");

            @$busca = mysqli_query(@$link,@$query);
            @$dado = mysqli_fetch_array(@$busca);
            @$valor_salada = @$dado['valor'];

        
    
        if(@$_SESSION['salada1']==NULL){
                $_SESSION['salada1']=@"$salada";
                $_SESSION['valor_salada1']=@$valor_salada;
            }
            else{
                if(@$_SESSION['salada2']==NULL){
                    $_SESSION['salada2']=@"$salada";
                    $_SESSION['valor_salada2']=@$valor_salada;
                }
                else{
                    if(@$_SESSION['salada3']==NULL){
                    $_SESSION['salada3']=@"$salada";
                    $_SESSION['valor_salada3']=@$valor_salada;
                }
                    else{echo "Número máximo de recheio preenchido!";}
                }
            }
        }
        ?>



        <?php
        if($outros!=NULL){
    @$link=mysqli_connect('db4free.net:3306','sejaochef','123456789','sejaochef');
    
    @$query = ("SELECT valor FROM ingredientes WHERE ingredientes.nome='$outros'");

            @$busca = mysqli_query(@$link,@$query);
            @$dado = mysqli_fetch_array(@$busca);
            @$valor_outros = @$dado['valor'];

        
    
        if(@$_SESSION['outros1']==NULL){
                $_SESSION['salada1']=@"$outros";
                $_SESSION['valor_outros1']=@$valor_outros;
            }
            else{
                if(@$_SESSION['outros2']==NULL){
                    $_SESSION['outros2']=@"$outros";
                    $_SESSION['valor_outros2']=@$valor_outros;
                }
                else{
                    if(@$_SESSION['outros3']==NULL){
                    $_SESSION['outros3']=@"$outros";
                    $_SESSION['valor_outros3']=@$valor_outros;
                }
                    else{echo "Número máximo de recheio preenchido!";}
                }
            }
        }
        ?>


     </div> 

    <div id="escolhidos" align="center">

        <table width=130 height=50 >
            <caption><b>Ingredientes Escolhidos</b></caption>
            <br>
            <tr>
			<td>
				<b>Opções</b></td>
                <td><b>Ingrediente</b></td>
                <td><b>Valor(R$)</b></td>
                <td></td>
            </tr>
			<?php
				if(isset($_GET['x_pao'])){
				$_SESSION['pao']=NULL;
                $_SESSION['valor_pao']=NULL;
			}
			?>

            <?php
                if(isset($_GET['cancelar'])){
                @$_SESSION['pao']=NULL;
                @$_SESSION['valor_pao']=NULL;
                @$_SESSION['recheio1']=NULL;
                @$_SESSION['valor1']=NULL;
                @$_SESSION['recheio2']=NULL;
                @$_SESSION['valor2']=NULL;
                @$_SESSION['recheio3']=NULL;
                @$_SESSION['valor3']=NULL;
                @$_SESSION['molho1']=NULL;
                @$_SESSION['valor_molho1']=NULL;
                @$_SESSION['molho2']=NULL;
                @$_SESSION['valor_molho2']=NULL;
                @$_SESSION['molho3']=NULL;
                @$_SESSION['valor_molho3']=NULL;
                @$_SESSION['frios1']=NULL;
                @$_SESSION['valor_frios1']=NULL;
                @$_SESSION['frios2']=NULL;
                @$_SESSION['valor_frios2']=NULL;
                @$_SESSION['frios3']=NULL;
                @$_SESSION['valor_frios3']=NULL;
                @$_SESSION['salada1']=NULL;
                @$_SESSION['valor_salada1']=NULL;
                @$_SESSION['salada2']=NULL;
                @$_SESSION['valor_salada2']=NULL;
                @$_SESSION['salada3']=NULL;
                @$_SESSION['valor_salada3']=NULL;


                @$_SESSION['outros1']=NULL;
                @$_SESSION['valor_outros1']=NULL;
                @$_SESSION['outros2']=NULL;
                @$_SESSION['valor_outros2']=NULL;
                @$_SESSION['outros3']=NULL;
                @$_SESSION['valor_outros3']=NULL;
 

            }
                ?>
            <tr>
				<td>Pão-</td>
                <td size="20"><a><?php if(!isset($_SESSION['pao'])){ echo '';}else{echo $_SESSION['pao'];}?></a></td>
                <td><a><?php echo @$_SESSION['valor_pao']?></a></td>
                <td><button class=" btn btn-red" name="x_pao">    X   </button></td>
            </tr>
			<?php
				if(isset($_GET['x1'])){
				$_SESSION['recheio1']=NULL;
				@$_SESSION['valor_recheio1']=NULL;
                }
			?>
            <tr>
				<td>Recheio1-</td>
                <td><a><?php if(!isset($_SESSION['recheio1'])){ echo "";}else{echo $_SESSION['recheio1'];}?></a></td>
                <td><a><?php echo @$_SESSION['valor_recheio1']; ?></a></td>
                <td><button class=" btn btn-red" name="x1" >    X   </button></td>
            </tr>
			<?php
				if(isset($_GET['x2'])){
				$_SESSION['recheio2']=NULL;
                @$_SESSION['valor_recheio2']=NULL;
				}
			?>
            <tr>
				<td>Recheio2-</td>
                <td><a><?php if(!isset($_SESSION['recheio2'])){ echo "";}else{echo $_SESSION['recheio2'];}?></a></td>
                <td><a><?php echo $_SESSION['valor_recheio2']; ?></a></td>                      
                <td><button class="btn btn-red" name="x2">    X   </button></td>
            </tr>
			<?php
				if(isset($_GET['x3'])){
				$_SESSION['recheio3']=NULL;
				@$_SESSION['valor_recheio3']=NULL;
                }
			?>	
            <tr>
				<td>Recheio3-</td>
                <td><a><?php if(!isset($_SESSION['recheio3'])){ echo "";}else{echo $_SESSION['recheio3'];}?></a></td>
                <td><a><?php echo @$_SESSION['valor_recheio3'];?></a></td>
                <td><button class=" btn btn-red" name="x3">    X   </button></td>
            </tr>
            <?php
                if(isset($_GET['x4'])){
                $_SESSION['molho1']=NULL;
                $_SESSION['valor_molho1']=NULL;
                }
            ?>  
            <tr>
                <td>Molho1-</td>
                <td><a><?php if(!isset($_SESSION['molho1'])){ echo "";}else{echo $_SESSION['molho1'];}?></a></td>
                <td><a><?php echo @$_SESSION['valor_molho1'];?></a></td>
                <td><button class=" btn btn-red" name="x4">    X   </button></td>
            </tr>
            <?php
                if(isset($_GET['x5'])){
                $_SESSION['molho2']=NULL;
                $_SESSION['valor_molho2']=NULL;
                }
            ?>  
            <tr>
                <td>Molho2-</td>
                <td><a><?php if(!isset($_SESSION['molho2'])){ echo "";}else{echo $_SESSION['molho2'];}?></a></td>
                <td><a><?php echo $_SESSION['valor_molho2'];?></a></td>
                <td><button class=" btn btn-red" name="x5">    X   </button></td>
            </tr>
            <?php
                if(isset($_GET['x6'])){
                $_SESSION['molho3']=NULL;
                $_SESSION['valor_molho3']=NULL;
                }
            ?>  
            <tr>
                <td>Molho3-</td>
                <td><a><?php if(!isset($_SESSION['molho3'])){ echo "";}else{echo $_SESSION['molho3'];}?></a></td>
                <td><a><?php echo $_SESSION['valor_molho1'];?></a></td>
                <td><button class=" btn btn-red" name="x6">    X   </button></td>
            </tr>
            <?php
                if(isset($_GET['x7'])){
                $_SESSION['frios1']=NULL;
                $_SESSION['valor_frios1']=NULL;
                }
            ?>  
            <tr>
                <td>Frios1-</td>
                <td><a><?php if(!isset($_SESSION['frios1'])){ echo "";}else{echo $_SESSION['frios1'];}?></a></td>
                <td><a><?php echo $_SESSION['valor_frios1'];?></a></td>
                <td><button class=" btn btn-red" name="x7">    X   </button></td>
            </tr>
            <?php
                if(isset($_GET['x8'])){
                $_SESSION['frios2']=NULL;
                $_SESSION['valor_frios2']=NULL;
                }
            ?>  
            <tr>
                <td>Frios2-</td>
                <td><a><?php if(!isset($_SESSION['frios2'])){ echo "";}else{echo $_SESSION['frios2'];}?></a></td>
                <td><a><?php echo $_SESSION['valor_frios2'];?></a></td>
                <td><button class=" btn btn-red" name="x8">    X   </button></td>
            </tr>
            <?php
                if(isset($_GET['x9'])){
                $_SESSION['frios3']=NULL;
                $_SESSION['valor_frios3']=NULL;
                }
            ?>  
            <tr>
                <td>Frios1-</td>
                <td><a><?php if(!isset($_SESSION['frios3'])){ echo "";}else{echo $_SESSION['frios3'];}?></a></td>
                <td><a><?php echo $_SESSION['valor_frios3'];?></a></td>
                <td><button class=" btn btn-red" name="x9">    X   </button></td>
            </tr>
            <?php
                if(isset($_GET['x10'])){
                $_SESSION['salada1']=NULL;
                $_SESSION['valor_salada1']=NULL;
                }
            ?>
            <tr>
                <td>Salada1-</td>
                <td><a><?php if(!isset($_SESSION['salada1'])){ echo "";}else{echo $_SESSION['salada1'];}?></a></td>
                <td><a><?php echo $_SESSION['valor_salada1']; ?></a></td>                      
                <td><button class="btn btn-red" name="x10">    X   </button></td>
            </tr>
            <?php
                if(isset($_GET['x11'])){
                $_SESSION['salada2']=NULL;
                $_SESSION['valor_salada2']=NULL;
                }
            ?>
            <tr>
                <td>Salada2-</td>
                <td><a><?php if(!isset($_SESSION['salada2'])){ echo "";}else{echo $_SESSION['salada2'];}?></a></td>
                <td><a><?php echo $_SESSION['valor_salada2']; ?></a></td>                      
                <td><button class="btn btn-red" name="x11">    X   </button></td>
            </tr>
            <?php
                if(isset($_GET['x12'])){
                $_SESSION['salada3']=NULL;
                $_SESSION['valor_salada3']=NULL;
                }
            ?>
            <tr>
                <td>Salada3-</td>
                <td><a><?php if(!isset($_SESSION['salada3'])){ echo "";}else{echo $_SESSION['salada3'];}?></a></td>
                <td><a><?php echo $_SESSION['valor_salada3']; ?></a></td>                      
                <td><button class="btn btn-red" name="x12">    X   </button></td>
            </tr>
            <?php
                if(isset($_GET['x13'])){
                $_SESSION['outros1']=NULL;
                $_SESSION['valor_outros1']=NULL;
                }
            ?>
            <tr>
                <td>Outros1-</td>
                <td><a><?php if(!isset($_SESSION['outros1'])){ echo "";}else{echo $_SESSION['outros1'];}?></a></td>
                <td><a><?php echo $_SESSION['valor_outros1']; ?></a></td>                      
                <td><button class="btn btn-red" name="x13">    X   </button></td>
            </tr>
            <?php
                if(isset($_GET['x14'])){
                $_SESSION['outros2']=NULL;
                $_SESSION['valor_outros2']=NULL;
                }
            ?>
            <tr>
                <td>Outros2-</td>
                <td><a><?php if(!isset($_SESSION['outros2'])){ echo "";}else{echo $_SESSION['outros2'];}?></a></td>
                <td><a><?php echo $_SESSION['valor_outros2']; ?></a></td>                      
                <td><button class="btn btn-red" name="x14">    X   </button></td>
            </tr>
            <?php
                if(isset($_GET['x15'])){
                $_SESSION['outros3']=NULL;
                $_SESSION['valor_outros3']=NULL;
                }
            ?>
            <tr>
                <td>Outros3-</td>
                <td><a><?php if(!isset($_SESSION['outros3'])){ echo "";}else{echo $_SESSION['outros3'];}?></a></td>
                <td><a><?php echo $_SESSION['valor_outros3']; ?></a></td>                      
                <td><button class="btn btn-red" name="x15">    X   </button></td>
            </tr>


            <table align="center">
                <br>
                <tr>
                    <td>Valor Total (R$)</td>
                    <td align="rigth"><input type="text" size="7" maxlength="8" value="<?php echo(@$_SESSION['valor_pao']+@$_SESSION['valor_recheio1']+@$_SESSION['valor_recheio2']+@$_SESSION['valor_recheio3']+@$_SESSION['valor_molho1']+@$_SESSION['valor_molho2']+@$_SESSION['valor_molho3']+@$_SESSION['valor_frios1']+@$_SESSION['valor_frios2']+@$_SESSION['valor_frios3']+@$_SESSION['valor_salada1']+@$_SESSION['valor_salada2']+@$_SESSION['valor_salada3']+@$_SESSION['valor_outros1']+@$_SESSION['valor_outros2']+@$_SESSION['valor_outros3'])?>"></td>
                </tr>
                <tr>
                    <td align="center"><input class="btn btn-red" type="submit" name="cancelar" value="Cancelar"></td>
                    <td><input class="btn btn-green" type="button"
                               onclick="window.location.href  = 'paginaPagamento.php'"
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
