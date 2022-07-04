<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração de disciplina existente</title>
</head>

<body>
    <?php
    require_once("conexao.php");
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $curso = $_POST["curso"];
    $ch = $_POST["ch"];
    $ativa = $_POST["ativa"];
    $preco = $_POST["preco"];
    $datainicio = $_POST["datai"];
    $datafim = $_POST["dataf"];

    $sql = "UPDATE disciplina 
            SET nome='$nome', curso='$curso', ch='$ch',
            ativa='$ativa', preco='$preco', 
            datainicio='$datainicio', datafim='$datafim'
            WHERE id='$id'";

    $result = $con->query($sql);

    if ($con->affected_rows > 0) {
        echo "<h1>Disciplina alterada com sucesso!</h1>";
    } else {
        echo "<h1>Ocorreu um erro</h1>";
        echo "<p>{$con->error}</p>";
    }
    ?>

    <p><a href="principal.html">Voltar</a></p>
</body>

</html>