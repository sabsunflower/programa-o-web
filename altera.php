<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Alteração</title>
</head>

<body>
    <h1>Alteração de disciplina</h1>
    <?php
    $id = $_GET["id"];
    require_once("conexao.php");
    $sql = "SELECT * FROM disciplina WHERE id = '$id'";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        $linha = $result->fetch_assoc();
    ?>
        <form method="post" action="alteracao.php">
            <input type="hidden" name="id" value="<?= $linha['id'] ?>" />
            <p>Nome: <input type="text" name="nome" value="<?= $linha['nome'] ?>" /></p>
            <p>Curso: <input type="text" name="curso" value="<?= $linha['curso'] ?>" /></p>
            <p>Carga Horária: <input type="number" name="ch" value="<?= $linha['ch'] ?>" /></p>
            <p>Disciplina ativa? <?= $linha["ativa"] ?>
                <input type="radio" name="ativa" value="1" <?php
                                                            if ($linha['ativa'] == 1) echo 'checked'
                                                            ?> "/>Sim
            <input type=" radio" name="ativa" value="0" <?php
                                                        if ($linha['ativa'] == 0) echo 'checked'
                                                        ?> />Não
            </p>
            <p>Preço: <input type="text" name="preco" value="<?= $linha['preco'] ?>" /></p>
            <p>Data de início: <input type="date" name="datai" value="<?= $linha['datainicio'] ?>" /></p>
            <p>Data de fim: <input type="date" name="dataf" value="<?= $linha['datafim'] ?>" /></p>
            <p><input type="submit" value="Alterar" /></p>
        </form>
    <?php
    } else {
        echo "<p>Nenhum registro encontrado para atualizar</p>";
    }
    ?>
</body>

</html>