<?php

     $login = $_COOKIE["login"];
     $senha = $_COOKIE["senha"];


$con = new mysqli("localhost", "root", "", "vendas");

$sql = "SELECT * FROM clientes WHERE username = '$login' AND password = '$senha' ";

$result = $con->query($sql);

if ($result->num_rows != 1) {

    header("Location: primeira.php");
    exit(0);
}

?>