<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Busca de CEP online</title>
</head>
<body>
    <h1>Buscar dados do CEP:</h1>
    <form method="post" action="">
        <label for="cep">CEP:</label>
        <input type="text" name="cep" id="cep"/>
        <input type="submit" value="buscar"/>
    </form>

    <?php
      if(isset($_POST) && trim($_POST["cep"]) != ""){
        echo "tem cep informado";
      }
      else{
        echo "não tem cep informado";
      }
      
    ?>
</body>
</html>