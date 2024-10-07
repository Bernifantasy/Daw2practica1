<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function recursividad($a)
    {    
        if ($a < 20) {
            echo "$a\n";
            recursividad($a + 1);
        }
    }
    echo recursividad(3);
    ?>
</body>
</html>