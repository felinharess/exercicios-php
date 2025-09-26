<?php
session_start();
if (!isset($_POST['numero'])) {
    header('Location: exercicio3.html');
    exit();
}   
$resultado = [];
$menor = $medio = $maior = null;

    $numeros = [
        $_POST['num1'],
        $_POST['num2'],
        $_POST['num3'],
        $_POST['num4'],
        $_POST['num5']
    ];

    sort($numeros);

    $menor = $numeros[0];
    $medio = $numeros[2]; 
    $maior = $numeros[4];

    $resultado = $numeros;

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números em Ordem Crescente</title>
    <link rel="stylesheet" href="exercicio6.css">
</head>
<body>
    <?php if (!empty($resultado)) : ?>
        <h2>Valores em ordem crescente:</h2>
        <div class="numeros">
            <?php foreach ($resultado as $num) : 
                $classe = "";
                if ($num == $menor) $classe = "menor";
                elseif ($num == $medio) $classe = "medio";
                elseif ($num == $maior) $classe = "maior";
            ?>
                <span class="<?= $classe ?>"><?= $num ?></span>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</body>
</html>
