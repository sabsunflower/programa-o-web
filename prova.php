<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <title>Document</title>
</head>

<body>
    
    <?php

    $i = 0;

    while ($i <= 10) {

        if ($i == 10) {

            echo "<p>Terminou</p>";
        } else {

            echo "<p>Valor de i: $i</p>";

            $i++;
        }

        $i++;
    }

    ?>
</body>

</html>