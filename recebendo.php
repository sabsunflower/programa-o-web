<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
   
    <title>Cadastro de um produto</title>
</head>
<body>

 <h1>Página que recebeu dados do cadastro</h1>

 <?php

 $servidor_bd= "localhost";
 $login_bd= "root";
 $senha_bd= "";
 $banco_de_dados= "meu_sistema_web";

 // conectar ao banco de dados

 $con = new mysqli ( $servidor_bd, $login_bd, $senha_bd, $banco_de_dados);
 if ($con ->connect_errno) {
     echo"<p> Ocorreu um erro" . $con->connect_errno . "</p>";
        echo "<p> Mensagem" . $con->connect_errno . "</p>";
 }
else {
    echo "<p> Conectado com sucesso </p>";
}

// criar uma String SQL

    $nome= $_POST["nome"];
    $preco = $_POST["preco"];
    $fabricante = $_POST["fabricante"];
    $quantidade = $_POST["qtdestoque"];
    $disponivel = $_POST["disponivel"];
    $datacadastro = date("Y-m-d");

    $sql = "insert into produtos values(null, '$nome', $preco, '$fabricante', $quantidade, $disponivel, '$datacadastro')";
    echo $sql;

    $result = $con->query($sql);
    if($con->errno){
        echo "<p>Ocorreu um erro" . $con->connect_errno .  "</p>";
        echo "<p>Mensagem: " . $con->connect_errno .  "</p>";

    }
    else{
        "<p>Produto cadastrado com sucesso</p>";
        
    }

    ?>
</body>
</html>