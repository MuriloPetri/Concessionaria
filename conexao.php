<?php

$host = "localhost";
$bancoDados = "concessionaria";
$username = "root";
$senhaAdm = "";

$conexao = mysqli_connect($host , $username, $senhaAdm, $bancoDados);

if( !$conexao){
    echo "Falhou.".mysqli.connect_error();
}
else{
    echo "Conectado";
}


?>