<?php
session_start();
if (!isset($_POST['numero'])) {
    header('Location: exercicio3.html');
    exit();
}   
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$classeIdade = '';
if ($idade <= 12 and $idade >= 0 ) {
    $retorno = $nome . " é menor de idade e tem " . $idade . " anos";
    $classeIdade = 'azul';
} elseif ($idade >= 13 and $idade <= 17) {
    $retorno = $nome . " é menor de idade e tem " . $idade . " anos";
    $classeIdade = 'roxo';
} elseif ($idade >= 18 and $idade <= 59) {
    $retorno = $nome . " é maior de idade e tem " . $idade . " anos";
    $classeIdade = 'verde';
} elseif ($idade >= 60) {
    $retorno = $nome . " é maior de idade e tem " . $idade . " anos";
    $classeIdade = 'laranja';
} else{
    $retorno = "Idade inválida";
    $classeIdade = 'vermelho';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade</title>
    <link rel="stylesheet" href="exercicio9.css">
</head>
<body>
    <div class="container">
        <?php if (!empty($retorno)): ?>
            <p class="<?= $classeIdade ?>"> <?= $retorno ?></p>
        <?php endif; ?>
    </div>
</body>
</html>