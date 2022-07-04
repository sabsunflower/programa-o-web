<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Frutas</title>
</head>

<body>
    <form method="post" action="incluir.php">
        <label for="nome">Nome: </label>
        <input type="text" id="nome" name="nome" />
        <br /><br />
        <label for="peso">Peso: </label>
        <input type="text" id="peso" name="peso" />
        <br /><br />
        <label for="preco">Preço por Kg: </label>
        <input type="text" id="preco" name="preco" />
        <br /><br />
        <input type="submit" value="Enviar" />
    </form>

    <h1>Frutas Cadastradas</h1>
    <table border="1">
        <tr>
            <td>Id:</td>
            <td>Nome:</td>
            <td>Peso: </td>
            <td>Preço por kg</td>
        </tr>

        <?php
        require_once("conexao.php");

        $sql = "SELECT * FROM cadastro
            ORDER BY nome";

        $result = $con->query($sql);
        while ($linha = $result->fetch_assoc()) {
        ?>
            <tr>
                <td><?= $linha["id"] ?></td>
                <td><?= $linha["nome"] ?></td>
                <td><?= $linha["peso"] ?></td>
                <td><?= $linha["precokg"] ?></td>
            </tr>
        <?php
        }
        ?>

    </table>


</body>

</html>