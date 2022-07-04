<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>

    <style>
        label {
            display: block;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <h1 align="center">Cadastro de Produtos</h1>

    </br>

    <form method="post" action="recebendo.php">
        <fieldset>
            <legend>Informe os dados do Produto</legend>

            <label for="nome">Nome: </label>
            <input type="text" id="nome" name="nome" />

            </br>

            <label for="preco">Preço: </label>
            <input type="text" id="preco" name="preco" placeholder="Informe o preço" />

            </br>

            <label for="fabricante">Fabricante: </label>
            <input type="text" id="fabricante" name="fabricante" />

            </br>

            <label for="qtdestoque">Quantidade de Estoque: </label>
            <input type="number" id="qtdestoque" name="qtdestoque" min="0" max="100" value="1" />

            </br>

            Disponível:
            <input type="radio" name="disponivel" value="sim" /> Sim
            <input type="radio" name="disponivel" value="nao" /> Não

            </br>
            
            <input type="submit" value="Enviar dados" />

            

        </fieldset>

    </form>

</body>

</html>