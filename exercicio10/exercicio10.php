<?php
session_start();
if (!isset($_POST['numero'])) {
    header('Location: exercicio3.html');
    exit();
}   
$palpite = $_POST['mes'];

switch ($palpite) {
    case 1:
        $mes = "Janeiro";
        break;
    case 2:
        $mes = "Fevereiro";
        break;
    case 3:
        $mes = "Março";
        break;
    case 4:
        $mes = "Abril";
        break;
    case 5:
        $mes = "Maio";
        break;
    case 6:
        $mes = "Junho";
        break;
    case 7:
        $mes = "Julho";
        break;
    case 8:
        $mes = "Agosto";
        break;
    case 9:
        $mes = "Setembro";
        break;
    case 10:
        $mes = "Outubro";
        break;
    case 11:
        $mes = "Novembro";
        break;
    case 12:
        $mes = "Dezembro";
        break;
    default:
        $mes = "Inválido";
        break;
}
if ($mes == 'Inválido') {
    $retorno = 'Você digitou um valor inválido, digite um numero entre 1 e 12';
} else {
    $retorno = "Você enviou o mês: " . $mes;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revelar mes</title>
    <link rel="stylesheet" href="exercicio10.css">
</head>

<body>
    <?php
    if (!empty($retorno)) {
        echo $retorno;
    }
    ?>
</body>

</html>