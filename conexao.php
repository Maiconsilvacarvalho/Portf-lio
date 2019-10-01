<?php

$hostname = "localhost";
$user = "";
$password = "";
$database = "portfolio";
$conexao = mysqli_connect($hostname,$user,$password,$database);

//verificar se a variavel funcionou ou nao.

if(!$conexao){
    echo "Falha na conexão com o BD";
}

?>
