<?php
session_start();
if (!isset($_POST['numero'])) {
    header('Location: exercicio3.html');
    exit();
}   
$numero = $_POST['numero'];
$classeBody = "";

if ($numero % 2 == 0) {
    $resposta = $numero . ' é Par';
    $classeBody = "resultado-par";
} else {
    $resposta = $numero . ' é Impar';
    $classeBody = "resultado-impar";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par/Impar</title>
    <link rel="stylesheet" href="exercicio5.css">
</head>

<body body class="<?php echo $classeBody; ?>">
    <?php
    if (!empty($resposta)) {
        echo $resposta;
    }
    ?>


</body>

</html>