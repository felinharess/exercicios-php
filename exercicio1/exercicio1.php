<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: ../login/login.html");
    exit;
}
$usuario = $_SESSION['usuario'];
$numero = $_POST['numero'];

if ($numero > 0) {
    $resultado = "<p class='resultado-pos'>Valor positivo</p>";
} elseif ($numero < 0) {
    $resultado = "<p class='resultado-neg'>Valor negativo</p>";
} else {
    $resultado = "<p class='resultado-zero'>O valor digitado é igual a zero</p>";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="exercicio1.css">
</head>

<body>
    <div class="container">
        <h1>Ola <?php echo $usuario?></h1>
        <a href="../index.html">Voltar</a>

        <?php
        if (!empty($resultado)) {
            echo $resultado;
        }


        ?>
    </div>
</body>

</html>