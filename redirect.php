<?php

include 'conexao.php';

if (isset($_POST['entrar'])){
    $login = $_POST ['login'];
    $senha = $_POST ['senha'];

    $sql = "SELECT * FROM `admin` WHERE `login` = '$login' AND `senha` = '$senha'";
    
    $rs = mysqli_query($conexao, $sql);

}

echo "Login: ".$login." Senha: ".$senha;

?>