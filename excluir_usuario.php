<?php

$excluir= $_GET['codigo'];
$link=mysqli_connect('db4free.net:3306','sejaochef','123456789','sejaochef');

if(!$link){ 
	die('Não foi possível conectar:'.mysqli_connect_error());
} 
echo $excluir;

$result = mysqli_query($link,"DELETE FROM ingredientes WHERE nome='$excluir'");

// e testando  1) se a query foi executada  2) se deletou algo de fato
if(!$result) {
    echo 'houve um problema na query'; 
	} elseif( mysqli_affected_rows($link) > 0 ) {
   echo 'deletou um ou mais registros';
   header("Location:http://localhost/SejaoChef-master/paginaADM_test.php");
} else {
   echo 'a query foi realizada, mas nao foi deletado nenhum registro';
}
?>