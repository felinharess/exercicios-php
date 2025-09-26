<?php
session_start();
if (!isset($_POST['numero'])) {
    header('Location: exercicio3.html');
    exit();
}   
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

if ($num1 == $num2) {
    $resposta = "Os valores digitados são iguais";
} elseif ($num1 > $num2) {
    $resposta = $num1 . ' é maior que ' . $num2;
} else {
    $resposta = $num2 . ' é maior que ' . $num1;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparador</title>
    <link rel="stylesheet" href="exercicio7.css">
</head>

<body>
    <?php
    if(!empty($resposta)){
        echo $resposta;
    }
    ?>
</body>

</html>