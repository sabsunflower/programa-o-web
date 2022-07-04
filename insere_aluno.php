<?php

//obter valores do formulário
$n = $_POST["nome"];
$d = $_POST["data"];
$c = $_POST["cidade"];

//conectar no banco de dados
$con = new mysqli("localhost", "root", "", "vinicio");

//criar a string com o comando SQL
$sql = "INSERT INTO alunos VALUES
(null, '$n', '$d', '$c')";

//executar o SQL no banco de dados
$result = $con->query($sql);

//verificar se ao menos uma linha foi modificada no BD
if($con->affected_rows > 0){
    echo "<p>Registro inserido com sucesso</p>";
}
else{
    echo "<p>Nada foi cadastrado. Tente novamente.</p>";
}

?>