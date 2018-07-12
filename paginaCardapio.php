<?php
session_start();

        if(isset($_GET['limpar'])){
                    session_destroy();
				session_start();	
                }      
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SejaChef</title>

   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    

    <link rel="stylesheet" type="text/css" href="css/CSSpagina.css">
    <link rel="stylesheet" type="text/css" href="css/CSSpaginaCardapio.css">
	<form id="formulario" name="atualizar" action="paginaCardapio.php" method="GET">
</head>
<body>
    <div id="ttcardapio">

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
<br><br><br>

<br><br><br>
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
				<!-- Botões + e -    -->
				
				<?php

                    if(isset($_GET['menos1'])){
                        if($_SESSION['mais1']==0){
                            
                            @$_SESSION['sanduiche1']=NULL;
                        }
                        else{
                            $_SESSION['mais1']-=1;
                            if($_SESSION['mais1']==0){
                            $_SESSION['mais1']=0;
                        }
                        }
                         }
                    

                    if(isset($_GET['mais1'])){
                        @$_SESSION['sanduiche1']='X-CALABRESA';
                        if (@$_SESSION['mais1']==NULL or @$_SESSION['mais1']==0) {
                            @$_SESSION['mais1']=1;
                            }
                        else{
                            @$_SESSION['mais1']+=1;
                           
                        }
                    }
                        

                    if(isset($_GET['mais1']) or isset($_GET['menos1'])){
                        if(@$_SESSION['nome_sanduiche1']==$_SESSION['sanduiche1']){
                            $_SESSION['quantidade1']=$_SESSION['mais1'];
							@$verificador=1;
                        }
                        else{
                            if (@$_SESSION['nome_sanduiche2']==$_SESSION['sanduiche1']) {
                                $_SESSION['quantidade2']=$_SESSION['mais1'];
								@$verificador=1;  
                               
                            }
                            else{
                                if (@$_SESSION['nome_sanduiche3']==$_SESSION['sanduiche1']) {
                                $_SESSION['quantidade3']=$_SESSION['mais1'];
								@$verificador=1;                                 
                                }
                                else{
                                    if (@$_SESSION['nome_sanduiche4']==$_SESSION['sanduiche1']) {
                                $_SESSION['quantidade4']=$_SESSION['mais1'];
								@$verificador=1; 
                                }
                                else{
                                    if (@$_SESSION['nome_sanduiche5']==$_SESSION['sanduiche1']) {
                                $_SESSION['quantidade5']=$_SESSION['mais1'];
								@$verificador=1; 
                               
                            }
                                }
                                }
                            }
                        }

                        if(@$_SESSION['nome_sanduiche1']==NULL and @$verificador!=1){
                            $_SESSION['nome_sanduiche1']=@$_SESSION['sanduiche1'];
                            $_SESSION['quantidade1']=$_SESSION['mais1'];
                        }
                        else{
                            if(@$_SESSION['nome_sanduiche2']==NULL and @$verificador!=1){
                            $_SESSION['nome_sanduiche2']=@$_SESSION['sanduiche1'];
                            $_SESSION['quantidade2']=$_SESSION['mais1'];
                            }
                            else{   
                                if(@$_SESSION['nome_sanduiche3']==NULL and @$verificador!=1){
                                    $_SESSION['nome_sanduiche3']=@$_SESSION['sanduiche1'];
                                    $_SESSION['quantidade3']=$_SESSION['mais1'];
                                }
                                else{   if(@$_SESSION['nome_sanduiche4']==NULL and @$verificador!=1){
                                        $_SESSION['nome_sanduiche4']=@$_SESSION['sanduiche1'];
                                        $_SESSION['quantidade4']=$_SESSION['mais1'];
                                    }
                                    else{
                                        if(@$_SESSION['nome_sanduiche5']==NULL and @$verificador!=1){
                                        $_SESSION['nome_sanduiche5']=@$_SESSION['sanduiche1'];
                                        $_SESSION['quantidade5']=$_SESSION['mais1'];
                                    }
                                    }
                                }
                            }
                            }
                    
					}
				?>
                <td width="100" height="100" align="center">
                    <label><b>R$ 15,00</b></label><BR>
                    <input disabled value="<?php echo @$_SESSION['mais1'] ?>" size="4"><br>
					<input class="btn btn-yellow" type="submit" name="mais1" value="  +  ">
                    <input class="btn btn-red" type="submit" name="menos1" value="  -  ">
                </td>
				
            </tr>
        </table>
        <br>
        <table class="tab" width="600" height="90">
            <tr>
                <?php

                    if(isset($_GET['menos2'])){
                        if($_SESSION['mais2']==0){
                            
                            @$_SESSION['sanduiche2']=NULL;
                        }
                        else{
                            $_SESSION['mais2']-=1;
                            if($_SESSION['mais2']==0){
                            $_SESSION['mais2']=0;
                        }
                        }
                         }
                    

                    if(isset($_GET['mais2'])){
                        @$_SESSION['sanduiche2']='X-BACON';
                        if (@$_SESSION['mais2']==NULL or @$_SESSION['mais2']==0) {
                            @$_SESSION['mais2']=1;
                            }
                        else{
                            @$_SESSION['mais2']+=1;
                           
                        }
                    }
                        

                    if(isset($_GET['mais2']) or isset($_GET['menos2'])){
                        if(@$_SESSION['nome_sanduiche1']==$_SESSION['sanduiche2']){
                            $_SESSION['quantidade1']=$_SESSION['mais2'];
							@$verificador=1;
                        }
                        else{
                            if (@$_SESSION['nome_sanduiche2']==$_SESSION['sanduiche2']) {
                                $_SESSION['quantidade2']=$_SESSION['mais2'];
								@$verificador=1;
                               
                            }
                            else{
                                if (@$_SESSION['nome_sanduiche3']==$_SESSION['sanduiche2']) {
                                $_SESSION['quantidade3']=$_SESSION['mais2'];
								@$verificador=1;
                               
                                }
                                else{
                                    if (@$_SESSION['nome_sanduiche4']==$_SESSION['sanduiche2']) {
                                $_SESSION['quantidade4']=$_SESSION['mais2'];
								@$verificador=1;
                               
                                }
                                else{
                                    if (@$_SESSION['nome_sanduiche5']==$_SESSION['sanduiche2']) {
                                $_SESSION['quantidade5']=$_SESSION['mais2'];
								@$verificador=1;
                               
                            }
                                }
                                }
                            }
                        }

                        if(@$_SESSION['nome_sanduiche1']==NULL and @$verificador!=1){
                            $_SESSION['nome_sanduiche1']=@$_SESSION['sanduiche2'];
                            $_SESSION['quantidade1']=$_SESSION['mais2'];
                        }
                        else{
                            if(@$_SESSION['nome_sanduiche2']==NULL and @$verificador!=1){
                            $_SESSION['nome_sanduiche2']=@$_SESSION['sanduiche2'];
                            $_SESSION['quantidade2']=$_SESSION['mais2'];
                            }
                            else{   
                                if(@$_SESSION['nome_sanduiche3']==NULL and @$verificador!=1){
                                    $_SESSION['nome_sanduiche3']=@$_SESSION['sanduiche2'];
                                    $_SESSION['quantidade3']=$_SESSION['mais2'];
                                }
                                else{   if(@$_SESSION['nome_sanduiche4']==NULL and @$verificador!=1){
                                        $_SESSION['nome_sanduiche4']=@$_SESSION['sanduiche2'];
                                        $_SESSION['quantidade4']=$_SESSION['mais2'];
                                    }
                                    else{
                                        if(@$_SESSION['nome_sanduiche5']==NULL and @$verificador!=1){
                                        $_SESSION['nome_sanduiche5']=@$_SESSION['sanduiche2'];
                                        $_SESSION['quantidade5']=$_SESSION['mais2'];
                                    }
                                    }
                                }
                            }
                            }
                    
					}
				?>
                <td>
                    <img id="ima" src="imagens/img.xbacon.jpg" width="130" height="100">
                </td>
                <td>
                    <b id="titulocardapio">X-BACON</b><br><br>
                    <label id="textocardapio"><b><i>Ingredientes:</i></b>Pão bola, hamburguer, tomate, alface,
                        bacon, queijo e presunto</label>
                </td>
                <!-- Botões + e -    -->
                
               
                <td width="100" height="100" align="center">
                    <label><b>R$ 15,00</b></label><BR>
                    <input disabled value="<?php echo @$_SESSION['mais2'] ?>" size="4"><br>
                    <input class="btn btn-yellow" type="submit" name="mais2" value="  +  ">
                    <input class="btn btn-red" type="submit" name="menos2" value="  -  ">
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
                <!-- Botões + e -    -->
                <?php

                    if(isset($_GET['menos3'])){
                        if($_SESSION['mais3']==0){
                            
                            @$_SESSION['sanduiche3']=NULL;
                        }
                        else{
                            $_SESSION['mais3']-=1;
                            if($_SESSION['mais3']==0){
                            $_SESSION['mais3']=0;
                        }
                        }
                         }
                    

                    if(isset($_GET['mais3'])){
                        @$_SESSION['sanduiche3']='X-FRANGO';
                        if (@$_SESSION['mais3']==NULL or @$_SESSION['mais3']==0) {
                            @$_SESSION['mais3']=1;
                            }
                        else{
                            @$_SESSION['mais3']+=1;
                           
                        }
                    }
                        

                    if(isset($_GET['mais3']) or isset($_GET['menos3'])){
                        if(@$_SESSION['nome_sanduiche1']==$_SESSION['sanduiche3']){
                            $_SESSION['quantidade1']=$_SESSION['mais3'];
							@$verificador=1;
                        }
                        else{
                            if (@$_SESSION['nome_sanduiche2']==$_SESSION['sanduiche3']) {
                                $_SESSION['quantidade2']=$_SESSION['mais3'];
								@$verificador=1;
                               
                            }
                            else{
                                if (@$_SESSION['nome_sanduiche3']==$_SESSION['sanduiche3']) {
                                $_SESSION['quantidade3']=$_SESSION['mais3'];
								@$verificador=1;
                               
                                }
                                else{
                                    if (@$_SESSION['nome_sanduiche4']==$_SESSION['sanduiche3']) {
                                $_SESSION['quantidade4']=$_SESSION['mais3'];
								@$verificador=1;
                               
                                }
                                else{
                                    if (@$_SESSION['nome_sanduiche5']==$_SESSION['sanduiche3']) {
                                $_SESSION['quantidade5']=$_SESSION['mais3'];
								@$verificador=1;
                               
                            }
                                }
                                }
                            }
                        }

                        if(@$_SESSION['nome_sanduiche1']==NULL and @$verificador!=1){
                            $_SESSION['nome_sanduiche1']=@$_SESSION['sanduiche3'];
                            $_SESSION['quantidade1']=$_SESSION['mais3'];
                        }
                        else{
                            if(@$_SESSION['nome_sanduiche2']==NULL and @$verificador!=1){
                            $_SESSION['nome_sanduiche2']=@$_SESSION['sanduiche3'];
                            $_SESSION['quantidade2']=$_SESSION['mais3'];
                            }
                            else{   
                                if(@$_SESSION['nome_sanduiche3']==NULL and @$verificador!=1){
                                    $_SESSION['nome_sanduiche3']=@$_SESSION['sanduiche3'];
                                    $_SESSION['quantidade3']=$_SESSION['mais3'];
                                }
                                else{   if(@$_SESSION['nome_sanduiche4']==NULL and @$verificador!=1){
                                        $_SESSION['nome_sanduiche4']=@$_SESSION['sanduiche3'];
                                        $_SESSION['quantidade4']=$_SESSION['mais3'];
                                    }
                                    else{
                                        if(@$_SESSION['nome_sanduiche5']==NULL and @$verificador!=1){
                                        $_SESSION['nome_sanduiche5']=@$_SESSION['sanduiche3'];
                                        $_SESSION['quantidade5']=$_SESSION['mais3'];
                                    }
                                    }
                                }
                            }
                            }
                    
					}
				?>

               
                <td width="100" height="100" align="center">
                    <label><b>R$ 15,00</b></label><BR>
                    <input disabled value="<?php echo @$_SESSION['mais3'] ?>" size="4"><br>
                    <input class="btn btn-yellow" type="submit" name="mais3" value="  +  ">
                    <input class="btn btn-red" type="submit" name="menos3" value="  -  ">
                </td>
            </tr>
        </table>
        <br>
		<?php

                    if(isset($_GET['menos4'])){
                        if($_SESSION['mais4']==0){
                            
                            @$_SESSION['sanduiche4']=NULL;
                        }
                        else{
                            $_SESSION['mais4']-=1;
                            if($_SESSION['mais4']==0){
                            $_SESSION['mais4']=0;
                        }
                        }
                         }
                    

                    if(isset($_GET['mais4'])){
                        @$_SESSION['sanduiche4']='X-CARNE DE SOL';
                        if (@$_SESSION['mais4']==NULL or @$_SESSION['mais4']==0) {
                            @$_SESSION['mais4']=1;
                            }
                        else{
                            @$_SESSION['mais4']+=1;
                           
                        }
                    }
                        

                    if(isset($_GET['mais4']) or isset($_GET['menos4'])){
                        if(@$_SESSION['nome_sanduiche1']==$_SESSION['sanduiche4']){
                            $_SESSION['quantidade1']=$_SESSION['mais4'];
							@$verificador=1;
                        }
                        else{
                            if (@$_SESSION['nome_sanduiche2']==$_SESSION['sanduiche4']) {
                                $_SESSION['quantidade2']=$_SESSION['mais4'];
								@$verificador=1;
                               
                            }
                            else{
                                if (@$_SESSION['nome_sanduiche3']==$_SESSION['sanduiche4']) {
                                $_SESSION['quantidade3']=$_SESSION['mais4'];
								@$verificador=1;
                               
                                }
                                else{
                                    if (@$_SESSION['nome_sanduiche4']==$_SESSION['sanduiche4']) {
                                $_SESSION['quantidade4']=$_SESSION['mais4'];
								@$verificador=1;
                               
                                }
                                else{
                                    if (@$_SESSION['nome_sanduiche5']==$_SESSION['sanduiche4']) {
                                $_SESSION['quantidade5']=$_SESSION['mais4'];
								@$verificador=1;
                               
                            }
                                }
                                }
                            }
                        }

                        if(@$_SESSION['nome_sanduiche1']==NULL and @$verificador!=1){
                            $_SESSION['nome_sanduiche1']=@$_SESSION['sanduiche4'];
                            $_SESSION['quantidade1']=$_SESSION['mais4'];
                        }
                        else{
                            if(@$_SESSION['nome_sanduiche2']==NULL and @$verificador!=1){
                            $_SESSION['nome_sanduiche2']=@$_SESSION['sanduiche4'];
                            $_SESSION['quantidade2']=$_SESSION['mais4'];
                            }
                            else{   
                                if(@$_SESSION['nome_sanduiche3']==NULL and @$verificador!=1){
                                    $_SESSION['nome_sanduiche3']=@$_SESSION['sanduiche4'];
                                    $_SESSION['quantidade3']=$_SESSION['mais4'];
                                }
                                else{   if(@$_SESSION['nome_sanduiche4']==NULL and @$verificador!=1){
                                        $_SESSION['nome_sanduiche4']=@$_SESSION['sanduiche4'];
                                        $_SESSION['quantidade4']=$_SESSION['mais4'];
                                    }
                                    else{
                                        if(@$_SESSION['nome_sanduiche5']==NULL and @$verificador!=1){
                                        $_SESSION['nome_sanduiche5']=@$_SESSION['sanduiche4'];
                                        $_SESSION['quantidade5']=$_SESSION['mais4'];
                                    }
                                    }
                                }
                            }
                            }
                    
					}
				?>

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
                <!-- Botões + e -    -->
               
                <td width="100" height="100" align="center">
                    <label><b>R$ 15,00</b></label><BR>
                    <input disabled value="<?php echo @$_SESSION['mais4'] ?>" size="4"><br>
                    <input class="btn btn-yellow" type="submit" name="mais4" value="  +  ">
                    <input class="btn btn-red" type="submit" name="menos4" value="  -  ">
                </td>
            </tr>
        </table>
        <br>
		<?php

                    if(isset($_GET['menos5'])){
                        if($_SESSION['mais5']==0){
                            
                            @$_SESSION['sanduiche5']=NULL;
                        }
                        else{
                            $_SESSION['mais5']-=1;
                            if($_SESSION['mais5']==0){
                            $_SESSION['mais5']=0;
                        }
                        }
                         }
                    

                    if(isset($_GET['mais5'])){
                        @$_SESSION['sanduiche5']='X-TANAJURA';
                        if (@$_SESSION['mais5']==NULL or @$_SESSION['mais5']==0) {
                            @$_SESSION['mais5']=1;
                            }
                        else{
                            @$_SESSION['mais5']+=1;
                           
                        }
                    }
                        

                    if(isset($_GET['mais5']) or isset($_GET['menos5'])){
                        if(@$_SESSION['nome_sanduiche1']==$_SESSION['sanduiche5']){
                            $_SESSION['quantidade1']=$_SESSION['mais5'];
							@$verificador=1;
                        }
                        else{
                            if (@$_SESSION['nome_sanduiche2']==$_SESSION['sanduiche5']) {
                                $_SESSION['quantidade2']=$_SESSION['mais5'];
								@$verificador=1;
                               
                            }
                            else{
                                if (@$_SESSION['nome_sanduiche3']==$_SESSION['sanduiche5']) {
                                $_SESSION['quantidade3']=$_SESSION['mais5'];
								@$verificador=1;
                               
                                }
                                else{
                                    if (@$_SESSION['nome_sanduiche4']==$_SESSION['sanduiche5']) {
                                $_SESSION['quantidade4']=$_SESSION['mais5'];
								@$verificador=1;
                               
                                }
                                else{
                                    if (@$_SESSION['nome_sanduiche5']==$_SESSION['sanduiche5']) {
                                $_SESSION['quantidade5']=$_SESSION['mais5'];
								@$verificador=1;
                               
                            }
                                }
                                }
                            }
                        }

                        if(@$_SESSION['nome_sanduiche1']==NULL and @$verificador!=1){
                            $_SESSION['nome_sanduiche1']=@$_SESSION['sanduiche5'];
                            $_SESSION['quantidade1']=$_SESSION['mais5'];
                        }
                        else{
                            if(@$_SESSION['nome_sanduiche2']==NULL and @$verificador!=1){
                            $_SESSION['nome_sanduiche2']=@$_SESSION['sanduiche5'];
                            $_SESSION['quantidade2']=$_SESSION['mais5'];
                            }
                            else{   
                                if(@$_SESSION['nome_sanduiche3']==NULL and @$verificador!=1){
                                    $_SESSION['nome_sanduiche3']=@$_SESSION['sanduiche5'];
                                    $_SESSION['quantidade3']=$_SESSION['mais5'];
                                }
                                else{   if(@$_SESSION['nome_sanduiche4']==NULL and @$verificador!=1){
                                        $_SESSION['nome_sanduiche4']=@$_SESSION['sanduiche5'];
                                        $_SESSION['quantidade4']=$_SESSION['mais5'];
                                    }
                                    else{
                                        if(@$_SESSION['nome_sanduiche5']==NULL and @$verificador!=1){
                                        $_SESSION['nome_sanduiche5']=@$_SESSION['sanduiche5'];
                                        $_SESSION['quantidade5']=$_SESSION['mais5'];
                                    }
                                    }
                                }
                            }
                            }
                    
					}
				?>
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
                <!-- Botões + e -    -->
                
               
                <td width="100" height="100" align="center">
                    <label><b>R$ 15,00</b></label><BR>
                    <input disabled value="<?php echo @$_SESSION['mais5'] ?>" size="4"><br>
                    <input class="btn btn-yellow" type="submit" name="mais5" value="  +  ">
                    <input class="btn btn-red" type="submit" name="menos5" value="  -  ">
                </td>
            </tr>
        </table>

        <br>
		<?php
                    if(isset($_GET['menos6'])){
                        if($_SESSION['mais6']==0){
                            
                            @$_SESSION['sanduiche6']=NULL;
                        }
                        else{
                            $_SESSION['mais6']-=1;
                            if($_SESSION['mais6']==0){
                            $_SESSION['mais6']=0;
                        }
                        }
                         }
                    

                    if(isset($_GET['mais6'])){
                        @$_SESSION['sanduiche6']='PASSAPORTE DE CARNE';
                        if (@$_SESSION['mais6']==NULL or @$_SESSION['mais6']==0) {
                            @$_SESSION['mais6']=1;
                            }
                        else{
                            @$_SESSION['mais6']+=1;
                           
                        }
                    }
                        

                    if(isset($_GET['mais6']) or isset($_GET['menos6'])){
                        if(@$_SESSION['nome_sanduiche1']==$_SESSION['sanduiche6']){
                            $_SESSION['quantidade1']=$_SESSION['mais6'];
							@$verificador=1;
                        }
                        else{
                            if (@$_SESSION['nome_sanduiche2']==$_SESSION['sanduiche6']) {
                                $_SESSION['quantidade2']=$_SESSION['mais6'];
								@$verificador=1;
                               
                            }
                            else{
                                if (@$_SESSION['nome_sanduiche3']==$_SESSION['sanduiche6']) {
                                $_SESSION['quantidade3']=$_SESSION['mais6'];
								@$verificador=1;
                               
                                }
                                else{
                                    if (@$_SESSION['nome_sanduiche4']==$_SESSION['sanduiche6']) {
                                $_SESSION['quantidade4']=$_SESSION['mais6'];
								@$verificador=1;
                               
                                }
                                else{
                                    if (@$_SESSION['nome_sanduiche6']==$_SESSION['sanduiche6']) {
                                $_SESSION['quantidade5']=$_SESSION['mais6'];
								@$verificador=1;
                               
                            }
                                }
                                }
                            }
                        }

                        if(@$_SESSION['nome_sanduiche1']==NULL and @$verificador!=1){
                            $_SESSION['nome_sanduiche1']=@$_SESSION['sanduiche6'];
                            $_SESSION['quantidade1']=$_SESSION['mais6'];
                        }
                        else{
                            if(@$_SESSION['nome_sanduiche2']==NULL and @$verificador!=1){
                            $_SESSION['nome_sanduiche2']=@$_SESSION['sanduiche6'];
                            $_SESSION['quantidade2']=$_SESSION['mais6'];
                            }
                            else{   
                                if(@$_SESSION['nome_sanduiche3']==NULL and @$verificador!=1){
                                    $_SESSION['nome_sanduiche3']=@$_SESSION['sanduiche6'];
                                    $_SESSION['quantidade3']=$_SESSION['mais6'];
                                }
                                else{   if(@$_SESSION['nome_sanduiche4']==NULL and @$verificador!=1){
                                        $_SESSION['nome_sanduiche4']=@$_SESSION['sanduiche6'];
                                        $_SESSION['quantidade4']=$_SESSION['mais6'];
                                    }
                                    else{
                                        if(@$_SESSION['nome_sanduiche6']==NULL and @$verificador!=1){
                                        $_SESSION['nome_sanduiche6']=@$_SESSION['sanduiche6'];
                                        $_SESSION['quantidade5']=$_SESSION['mais6'];
                                    }
                                    }
                                }
                            }
                            }
                    }
				?>
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
                <!-- Botões + e -    -->
                
               
                <td width="100" height="100" align="center">
                    <label><b>R$ 15,00</b></label><BR>
                    <input disabled value="<?php echo @$_SESSION['mais6'] ?>" size="4"><br>
                    <input class="btn btn-yellow" type="submit" name="mais6" value="  +  ">
                    <input class="btn btn-red" type="submit" name="menos6" value="  -  ">
                </td>
            </tr>
        </table>
        <br>
		<?php
                    if(isset($_GET['menos7'])){
                        if($_SESSION['mais7']==0){
                            
                            @$_SESSION['sanduiche7']=NULL;
                        }
                        else{
                            $_SESSION['mais7']-=1;
                            if($_SESSION['mais7']==0){
                            $_SESSION['mais7']=0;
                        }
                        }
                         }
                    

                    if(isset($_GET['mais7'])){
                        @$_SESSION['sanduiche7']='PASSAPORTE DE FRANGO';
                        if (@$_SESSION['mais7']==NULL or @$_SESSION['mais7']==0) {
                            @$_SESSION['mais7']=1;
                            }
                        else{
                            @$_SESSION['mais7']+=1;
                           
                        }
                    }
                        

                    if(isset($_GET['mais7']) or isset($_GET['menos7'])){
                        if(@$_SESSION['nome_sanduiche1']==$_SESSION['sanduiche7']){
                            $_SESSION['quantidade1']=$_SESSION['mais7'];
							@$verificador=1;
                        }
                        else{
                            if (@$_SESSION['nome_sanduiche2']==$_SESSION['sanduiche7']) {
                                $_SESSION['quantidade2']=$_SESSION['mais7'];
								@$verificador=1;
                               
                            }
                            else{
                                if (@$_SESSION['nome_sanduiche3']==$_SESSION['sanduiche7']) {
                                $_SESSION['quantidade3']=$_SESSION['mais7'];
								@$verificador=1;
                               
                                }
                                else{
                                    if (@$_SESSION['nome_sanduiche4']==$_SESSION['sanduiche7']) {
                                $_SESSION['quantidade4']=$_SESSION['mais7'];
								@$verificador=1;
                               
                                }
                                else{
                                    if (@$_SESSION['nome_sanduiche7']==$_SESSION['sanduiche7']) {
                                $_SESSION['quantidade5']=$_SESSION['mais7'];
								@$verificador=1;
                               
                            }
                                }
                                }
                            }
                        }

                        if(@$_SESSION['nome_sanduiche1']==NULL and @$verificador!=1){
                            $_SESSION['nome_sanduiche1']=@$_SESSION['sanduiche7'];
                            $_SESSION['quantidade1']=$_SESSION['mais7'];
                        }
                        else{
                            if(@$_SESSION['nome_sanduiche2']==NULL and @$verificador!=1){
                            $_SESSION['nome_sanduiche2']=@$_SESSION['sanduiche7'];
                            $_SESSION['quantidade2']=$_SESSION['mais7'];
                            }
                            else{   
                                if(@$_SESSION['nome_sanduiche3']==NULL and @$verificador!=1){
                                    $_SESSION['nome_sanduiche3']=@$_SESSION['sanduiche7'];
                                    $_SESSION['quantidade3']=$_SESSION['mais7'];
                                }
                                else{   if(@$_SESSION['nome_sanduiche4']==NULL and @$verificador!=1){
                                        $_SESSION['nome_sanduiche4']=@$_SESSION['sanduiche7'];
                                        $_SESSION['quantidade4']=$_SESSION['mais7'];
                                    }
                                    else{
                                        if(@$_SESSION['nome_sanduiche7']==NULL and @$verificador!=1){
                                        $_SESSION['nome_sanduiche7']=@$_SESSION['sanduiche7'];
                                        $_SESSION['quantidade5']=$_SESSION['mais7'];
                                    }
                                    }
                                }
                            }
                            }
                    
					}
				?>
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
                <!-- Botões + e -    -->
                
		<?php

                    if(isset($_GET['menos8'])){
                        if($_SESSION['mais8']==0){
                            
                            @$_SESSION['sanduiche8']=NULL;
                        }
                        else{
                            $_SESSION['mais8']-=1;
                            if($_SESSION['mais8']==0){
                            $_SESSION['mais8']=0;
                        }
                        }
                         }
                    

                    if(isset($_GET['mais8'])){
                        @$_SESSION['sanduiche8']='PASSAPORTE DE CHARQUE';
                        if (@$_SESSION['mais8']==NULL or @$_SESSION['mais8']==0) {
                            @$_SESSION['mais8']=1;
                            }
                        else{
                            @$_SESSION['mais8']+=1;
                           
                        }
                    }
                        

                    if(isset($_GET['mais8']) or isset($_GET['menos8'])){
                        if(@$_SESSION['nome_sanduiche1']==$_SESSION['sanduiche8']){
                            $_SESSION['quantidade1']=$_SESSION['mais8'];
							@$verificador=1;
                        }
                        else{
                            if (@$_SESSION['nome_sanduiche2']==$_SESSION['sanduiche8']) {
                                $_SESSION['quantidade2']=$_SESSION['mais8'];
								@$verificador=1;
                               
                            }
                            else{
                                if (@$_SESSION['nome_sanduiche3']==$_SESSION['sanduiche8']) {
                                $_SESSION['quantidade3']=$_SESSION['mais8'];
								@$verificador=1;
                               
                                }
                                else{
                                    if (@$_SESSION['nome_sanduiche4']==$_SESSION['sanduiche8']) {
                                $_SESSION['quantidade4']=$_SESSION['mais8'];
								@$verificador=1;
                               
                                }
                                else{
                                    if (@$_SESSION['nome_sanduiche8']==$_SESSION['sanduiche8']) {
                                $_SESSION['quantidade5']=$_SESSION['mais8'];
								@$verificador=1;
                               
                            }
                                }
                                }
                            }
                        }

                        if(@$_SESSION['nome_sanduiche1']==NULL and @$verificador!=1){
                            $_SESSION['nome_sanduiche1']=@$_SESSION['sanduiche8'];
                            $_SESSION['quantidade1']=$_SESSION['mais8'];
                        }
                        else{
                            if(@$_SESSION['nome_sanduiche2']==NULL and @$verificador!=1){
                            $_SESSION['nome_sanduiche2']=@$_SESSION['sanduiche8'];
                            $_SESSION['quantidade2']=$_SESSION['mais8'];
                            }
                            else{   
                                if(@$_SESSION['nome_sanduiche3']==NULL and @$verificador!=1){
                                    $_SESSION['nome_sanduiche3']=@$_SESSION['sanduiche8'];
                                    $_SESSION['quantidade3']=$_SESSION['mais8'];
                                }
                                else{   if(@$_SESSION['nome_sanduiche4']==NULL and @$verificador!=1){
                                        $_SESSION['nome_sanduiche4']=@$_SESSION['sanduiche8'];
                                        $_SESSION['quantidade4']=$_SESSION['mais8'];
                                    }
                                    else{
                                        if(@$_SESSION['nome_sanduiche8']==NULL and @$verificador!=1){
                                        $_SESSION['nome_sanduiche8']=@$_SESSION['sanduiche8'];
                                        $_SESSION['quantidade5']=$_SESSION['mais8'];
                                    }
                                    }
                                }
                            }
                            }
                    
					}
				?>               
                <td width="100" height="100" align="center">
                    <label><b>R$ 15,00</b></label><BR>
                    <input disabled value="<?php echo @$_SESSION['mais7'] ?>" size="4"><br>
                    <input class="btn btn-yellow" type="submit" name="mais7" value="  +  ">
                    <input class="btn btn-red" type="submit" name="menos7" value="  -  ">
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
                <!-- Botões + e -    -->
                
                <td width="100" height="100" align="center">
                    <label><b>R$ 15,00</b></label><BR>
                    <input disabled value="<?php echo @$_SESSION['mais8'] ?>" size="4"><br>
                    <input class="btn btn-yellow" type="submit" name="mais8" value="  +  ">
                    <input class="btn btn-red" type="submit" name="menos8" value="  -  ">
                </td>
            </tr>
        </table>
        <br>
    </div>


    <div id="escolhidoscardapio" align="center">
        <table width=300 height=50>
            <label><b>Ingredientes Escolhidos</b></label>
            <br>

            <tr>
                <th>Sanduiches</th>
                <th>Quantidade</th>
				<th width="4">Valor</th>
            </tr>

            <tr>
                <td><input disabled value="<?php if(@$_SESSION['quantidade1']==NULL or @$_SESSION['quantidade1']==0){
                                                                                echo "-"; $_SESSION['nome_sanduiche1']=NULL; } 
                                                                                else{echo $_SESSION['nome_sanduiche1'];}?>"></td>
                <td><input disabled value="<?php if(@$_SESSION['quantidade1']==0){
																				echo "-";} 
																				else{echo $_SESSION['quantidade1'];}?>"></td>
				<td><input disabled value="<?php echo @$_SESSION['valor1'] ?> ">
            </tr>

            <tr>
                <td><input disabled value="<?php if(@$_SESSION['quantidade2']==NULL or @$_SESSION['quantidade2']==0){
                                                                                echo "-"; $_SESSION['nome_sanduiche2']=NULL; } 
                                                                                else{echo $_SESSION['nome_sanduiche2'];}?>"></td>
                <td><input disabled value="<?php if(@$_SESSION['quantidade2']==0){
                                                                                echo "-";} 
                                                                                else{echo $_SESSION['quantidade2'];}?>"></td>
                <td><input disabled value="<?php echo @$_SESSION['valor2'] ?> ">
            </tr>

            <tr>
                <td><input disabled value="<?php if(@$_SESSION['quantidade3']==NULL or @$_SESSION['quantidade3']==0){
                                                                                echo "-"; $_SESSION['nome_sanduiche3']=NULL; } 
                                                                                else{echo $_SESSION['nome_sanduiche3'];}?>"></td>
                <td><input disabled value="<?php if(@$_SESSION['quantidade3']==0){
																				echo "-";} 
																				else{echo $_SESSION['quantidade3'];}?>"></td>
				<td><input disabled value="<?php echo @$_SESSION['valor3'] ?> ">
            </tr>

            <tr>
                <td><input disabled value="<?php if(@$_SESSION['quantidade4']==NULL or @$_SESSION['quantidade4']==0){
                                                                                echo "-"; $_SESSION['nome_sanduiche4']=NULL; } 
                                                                                else{echo $_SESSION['nome_sanduiche4'];}?>"></td>
                <td><input disabled value="<?php if(@$_SESSION['quantidade4']==0){
																				echo "-";} 
																				else{echo $_SESSION['quantidade4'];}?>"></td>
				<td><input disabled value="<?php echo @$_SESSION['valor4'] ?> ">
            </tr>
			
			<tr>
                <td><input disabled value="<?php if(@$_SESSION['quantidade5']==NULL or @$_SESSION['quantidade5']==0){
                                                                                echo "-"; $_SESSION['nome_sanduiche5']=NULL; } 
                                                                                else{echo $_SESSION['nome_sanduiche5'];}?>"></td>
                <td><input disabled value="<?php if(@$_SESSION['quantidade5']==0){
																				echo "-";} 
																				else{echo $_SESSION['quantidade5'];}?>"></td>
				<td><input disabled value="<?php echo @$_SESSION['valor5'] ?> ">
            </tr>
			
			<tr>
				<td><b>Valor Total</b></td>
				<td><input disabled name=""></td></td>
			</tr>
			
			</table><br>
            
                   <input class="btn btn-yellow" type="submit" name="limpar" value="Limpar"></input>
                   <input class="btn btn-green" type="button"
                               onclick="" value="Finalizar a compra"></input>
            
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

</body>
</html>
