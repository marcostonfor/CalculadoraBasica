<?php
require_once './interfaz.php';
require_once './estilos.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php echo Estilos::estils(); ?>
    <!-- <style>
        .calculadora {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
        }
    </style> -->
</head>

<body>
    <?php $calculadora = new InterfazBotones();
    echo $calculadora->interfaz(); ?>
</body>

</html>