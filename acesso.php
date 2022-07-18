<?php

@$login = trim($_POST["login"]);
@$senha = trim($_POST["senha"]);

if(strlen($login) == 0 || strlen($senha) == 0){
    
    header("Location: erro.php");
    exit(0);

}

$con = new mysqli("localhost", "root", "", "vendas");

$sql = "SELECT * FROM clientes WHERE username = '$login' AND password = '$senha' ";

$result = $con->query($sql);

if($result->num_rows == 1) {
     setcookie("usuario", "$login");
     setcookie("senha", "$senha"); 
     header("Location: primeira.php");
     exit(0);
 
}else{
    header("Location: erro.php");
    exit(0);
}

?>