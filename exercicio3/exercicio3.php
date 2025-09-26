<?php
session_start();
if (!isset($_POST['numero'])) {
    header('Location: exercicio3.html');
    exit();
}   
$numero = $_POST['numero'];
$fatorial = 1;
$classeBody = ""; 
$resultado = "";

if ($numero < 0  or $numero > 20) {
    $resultado = "<p>Valor Inválido</p>";
    $classeBody = "erro"; 
} else {
    $resultado = $numero . '! = ';
    for ($i = $numero; $i > 0; $i--) {
        $fatorial *= $i;
        if ($i > 1) {
            $resultado .= $i . ' x ';
        } else {
            $resultado .= $i . ' = ' . $fatorial;
        }
    }
    $classeBody = "sucesso"; 
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Fatorial</title>
    <link rel="stylesheet" href="exercicio3.css">
</head>
<body class="<?php echo $classeBody; ?>">
    <?php
    if (!empty($resultado)) {
        echo $resultado;
    }
    ?>
</body>
</html>
