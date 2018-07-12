<?php
session_start();
/////////////////CADASTRAR CLIENES/////////////////
if (isset($_GET['cadastrar'])) {
    $nome = $_GET['nome'];
    $cpf = $_GET['cpf'];
    $email = $_GET['email'];
    $endereco = $_GET['endereco'];
    $numero = $_GET['numero'];
    $referencia = $_GET['referencia'];
    $celular = $_GET['celular'];
    $senha = $_GET['senha'];
    $senhaok = $_GET['senhaok'];

//https://www.db4free.net/phpMyAdmin/sql.php?db=sejaochef&table=cadastro&pos=0
//login:sejaochef senha:123456789

    $link = mysqli_connect('db4free.net:3306', 'sejaochef', '123456789', 'sejaochef');

    if (!$link) {
        die('Não foi possível conectar:' . mysqli_connect_error());
    }
    echo 'Conexão bem sucedida';
    if ($senha != $senhaok) {
        echo "Senhas não correspondentes!";
    }
    $cadastra = mysqli_query($link, "INSERT INTO cadastro (nome,cpf,email,endereco,numero,referencia,celular, senha) VALUES('$nome','$cpf','$email','$endereco','$numero','$referencia','$celular','$senha')");

    if ($cadastra == TRUE) {
        echo "Cadastrado!";
    } else {
        echo "erro ao cadastrar, motivo : " . mysqli_error($link);
    }
    mysqli_close($link);
}

/////////////////FAZER LOGIN/////////////////
if (isset($_GET['entrar'])) {
    $cpf2 = $_GET['cpf2'];
    $senha2 = $_GET['senha2'];

    $link = mysqli_connect('db4free.net:3306', 'sejaochef', '123456789', 'sejaochef');

    $query = "SELECT cpf, senha,nome FROM cadastro WHERE cadastro.cpf='$cpf2' and cadastro.senha='$senha2'";
    $busca = mysqli_query($link, $query);
    $dado = mysqli_fetch_array($busca);
    echo $query;
    echo "<br>cpf:" . $dado['cpf'];
    if ($dado['cpf'] == $cpf2 and $dado['senha'] == $senha2 and $senha2 != null and $cpf2 != null) {
        echo "Login ok!";
        echo "Usuário: " . $dado['nome'];
        $_SESSION['nome'] = $dado['nome'];
        header("Location:http://localhost/sejachef-master/paginaLogin.php");
    }//else{echo "Login Falied!";}

    else {
        echo '<script language="javascript" type="text/javascript"> 
                alert("Login falhou!");
                window.location = "paginaLogin.php";
        </script>';
    }

//$seu_link="paginaCardapio.html";
//echo "<a href=".$seu_link.">".$seu_link."</a>";

    mysqli_close($link);
}
/////////////////CADASTRAR INGREDIENTES/////////////////
if (isset($_GET['ingrediente'])) {
    $nome1 = $_GET['ingrediente1'];
    $quantidade1 = $_GET['quantidade1'];
    $tipo1 = $_GET['tipo1'];
    $valor1 = $_GET['valor1'];
    $nome2 = $_GET['ingrediente2'];
    $quantidade2 = $_GET['quantidade2'];
    $tipo2 = $_GET['tipo2'];
    $valor2 = $_GET['valor2'];
    $nome3 = $_GET['ingrediente3'];
    $quantidade3 = $_GET['quantidade3'];
    $tipo3 = $_GET['tipo3'];
    $valor3 = $_GET['valor3'];

    $link = mysqli_connect('db4free.net:3306', 'sejaochef', '123456789', 'sejaochef');

    if (!$link) {
        die('Não foi possível conectar INGREDIENTES:' . mysqli_connect_error());
    }
    
      $cadastra = mysqli_query($link, "INSERT INTO ingredientes (nome, quantidade, tipo, valor) VALUES('$nome1','$quantidade1', '$tipo1', '$valor1')");

        if ($cadastra == TRUE) {
            echo "Cadastrado!";
        } else {
            echo "erro ao cadastrar, motivo : " . mysqli_error($link);
        }
    } else {
        echo "Linha 1 não preenchida corretamente!";
    }

    if ($nome2 != null and $quantidade2 != null and $tipo2 != null and $valor2 != null) {
        $cadastra = mysqli_query($link, "INSERT INTO ingredientes (nome, quantidade, tipo, valor) VALUES('$nome2','$quantidade2', '$tipo2', '$valor2')");

        if ($cadastra == TRUE) {
            echo "Cadastrado!";
        } else {
            echo "erro ao cadastrar, motivo : " . mysqli_error($link);
        }
    } else {
        echo "Linha 2 não preenchida corretamente!";
    }

    if ($nome3 != null and $quantidade3 != null and $tipo3 != null and $valor3 != null) {
        $cadastra = mysqli_query($link, "INSERT INTO ingredientes (nome, quantidade, tipo, valor) VALUES('$nome3','$quantidade3', '$tipo3', '$valor3')");

        if ($cadastra == TRUE) {
            echo "Cadastrado!";
        } else {
            echo "erro ao cadastrar, motivo : " . mysqli_error($link);
        }
    } else {
        echo "Linha 3 não preenchida corretamente!";
    }

    header("Location:http://localhost/sejachef-master/paginaADM.php");
    mysqli_close($link);

////////////ATUALIZAR INGREDIENTES//////////

if (isset($_GET['atualizar'])) {
    $nome1 = $_GET['ingrediente1'];
    $quantidade1 = $_GET['quantidade1'];
    $tipo1 = $_GET['tipo1'];
    $valor1 = $_GET['valor1'];
    $nome2 = $_GET['ingrediente2'];
    $quantidade2 = $_GET['quantidade2'];
    $tipo2 = $_GET['tipo2'];
    $valor2 = $_GET['valor2'];
    $nome3 = $_GET['ingrediente3'];
    $quantidade3 = $_GET['quantidade3'];
    $tipo3 = $_GET['tipo3'];
    $valor3 = $_GET['valor3'];

        $link = mysqli_connect('db4free.net:3306', 'sejaochef', '123456789', 'sejaochef');

    if ($nome1 != null and $quantidade1 != null and $tipo1 != null and $valor1 != null) {    
     $atualiza1 = mysqli_query($link,"UPDATE ingredientes SET ingredientes.valor='$valor1',ingredientes.quantidade='$quantidade1',ingredientes.tipo='$tipo1' WHERE ingredientes.nome='$nome1'");
 }
 if ($nome2 != null and $quantidade2 != null and $tipo2 != null and $valor2 != null) {    
     $atualiza2 = mysqli_query($link,"UPDATE ingredientes SET ingredientes.valor='$valor2',ingredientes.quantidade='$quantidade2',ingredientes.tipo='$tipo2' WHERE ingredientes.nome='$nome2'");
 }
 if ($nome3 != null and $quantidade3 != null and $tipo3 != null and $valor3 != null) {    
     $atualiza3 = mysqli_query($link,"UPDATE ingredientes SET ingredientes.valor='$valor3',ingredientes.quantidade='$quantidade3',ingredientes.tipo='$tipo3' WHERE ingredientes.nome='$nome3'");
 }
    
if($atualiza1){
     echo "<h1>Campo 1 atualizado com sucesso!</h1>";
     mysql_close($dbhandle);

}else{
echo "Houve um erro ao atualizar Campo 1: " . mysql_error();
    }

if($atualiza2){
     echo "<h1>Campo 2 atualizado com sucesso!</h1>";
     mysql_close($dbhandle);

}else{
echo "Houve um erro ao atualizar Campo 2: " . mysql_error();
    }

if($atualiza3){
     echo "<h1>Campo 3 atualizado com sucesso!</h1>";
     mysql_close($dbhandle);

}else{
echo "Houve um erro ao atualizar Campo 3: " . mysql_error();
    }
}
header("Location:http://localhost/sejachef-master/paginaADM.php");
    mysqli_close($link);

///////EXCLUIR INGREDIENTES/////////

 if (isset($_GET['excluir'])) {
    $excluir= $_GET['codigo'];
$link=mysqli_connect('db4free.net:3306','sejaochef','123456789','sejaochef');

if(!$link){ 
    die('Não foi possível conectar:'.mysqli_connect_error());
} 


$result = mysqli_query($link,"DELETE FROM ingredientes WHERE nome='$excluir'");

// e testando  1) se a query foi executada  2) se deletou algo de fato
if(!$result) {
    echo 'houve um problema na query'; 
    } elseif( mysqli_affected_rows($link) > 0 ) {
   echo 'deletou um ou mais registros';
  // header("Location:http://localhost/sejachef-master/paginaADM.php");
} else {
   echo 'a query foi realizada, mas nao foi deletado nenhum registro';
}
}
?>