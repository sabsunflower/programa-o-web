<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Incluindo dados</title>
</head>

<body>
    <h1>Inclusão de dados</h1>
    <?php
    //obter os dados do formulário
    $nome = $_POST["nome"];
    $peso = $_POST["peso"];
    $preco = $_POST["preco"];
    $preco = str_replace(",", ".", $preco);

    require_once("conexao.php");

    $sql = "INSERT INTO cadastro
        VALUES (null, '$nome', 
        '$peso', '$preco')";

    $result = $con->query($sql);

    if ($con->affected_rows > 0) {
        echo "<p>";
        echo $con->affected_rows;
        echo " fruta(s) incluídas com sucesso!";
        echo "</p>";
    } else {
        echo "<p>Ocorreu um erro: ";
        echo $con->error;
        echo "</p>";
    }

    ?>

    <p><a href="cadastro.php">Voltar</a></p>

</body>

</html>