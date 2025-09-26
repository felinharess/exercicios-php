<?php
session_start();
if (!isset($_POST['numero'])) {
    header('Location: exercicio3.html');
    exit();
}   
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operacao = $_POST['operacao'];
$classeBody = "sucesso";

switch ($operacao) {
    case '+':
        $resultado = $num1 + $num2;
        break;

    case '-':
        $resultado = $num1 - $num2;
        break;

    case '/':
        if ($num2 == 0) {
            $resultado = "Erro: divisão por zero não é permitida.";
        } else {
            $resultado = $num1 / $num2;
        }
        break;

    case '*':
        $resultado = $num1 * $num2;
        $operacao = "x";
        break;

    case '^':
        $resultado = $num1 ** $num2;
        break;

    case '√':
        $resultado = 'Raiz de ' . $num1 . ': ' . sqrt($num1) . "<br>" .
            'Raiz de ' . $num2 . ': ' . sqrt($num2) . "<br>";
        break;
}
$retorno = $num1 .' '. $operacao .' '. $num2 . " = " . $resultado

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="exercicio4.css">
</head>

<body body class="<?php echo $classeBody; ?>">
    <?php
    if (isset($retorno)) {
        echo "<div class='resultado'>$retorno</div>";
    }


    ?>
</body>

</html>