<?php 
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: ../login/login.html");
    exit;
}   
$numero = $_POST['numero'];
$tabuada = '';

for($i = 0; $i <= 10; $i++){
    $tabuada .=  "<br>". $i . ' x ' . $numero . '= ' . ($i * $numero );
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <h1>Olá, Usuario!</h1>
    <a href="../index.html">Voltar para a pagina inicial</a>

    <?php 
    if(!empty($tabuada)){
        echo $tabuada;
    }


    ?>
</body>
</html>