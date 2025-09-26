<?php
session_start();
if (!isset($_POST['numero'])) {
    header('Location: exercicio3.html');
    exit();
}   
$media = null;
$retorno = "";
$situacao = "";
$classeSituacao = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Se foi enviada a nota da recuperação
    if (isset($_POST['rec'])) {
        $mediaAntiga = $_POST['media'];
        $rec = $_POST['rec'];

        $novaMedia = ($mediaAntiga + $rec) / 2;

        $media = $novaMedia;
        $retorno = "Sua média com recuperação é: " . $media;
    } else {
        // Primeira média (ponderada)
        $notas = [
            $_POST['nota1'],
            $_POST['nota2'],
            $_POST['nota3'],
        ];
        $pesos = [2, 2, 1];

        $soma = 0;
        $somaPesos = array_sum($pesos);

        foreach ($notas as $key => $valor) {
            $peso = $pesos[$key];
            $soma += $valor * $peso;
        }

        $media = $soma / $somaPesos;
        $retorno = "Sua média é: " . $media;
    }

    // Situação e classe CSS
    if ($media >= 7) {
        $situacao = "Aprovado";
        $classeSituacao = "verde";
    } elseif ($media >= 5) {
        $situacao = "Recuperação";
        $classeSituacao = "amarelo";
    } else {
        $situacao = "Reprovado";
        $classeSituacao = "vermelho";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Notas</title>
    <link rel="stylesheet" href="exercicio8.css">
</head>
<body>
    <div class="container">
        <?php if (!empty($retorno)): ?>
            <p><?= $retorno ?></p>
            <p class="<?= $classeSituacao ?>">Situação: <?= $situacao ?></p>
        <?php endif; ?>

        <?php if ($situacao === "Recuperação" && !isset($_POST['rec'])): ?>
            <form method="post">
                <label for="rec">Digite a nota da recuperação:</label>
                <input type="number" name="rec" id="rec" required step="0.01" min="0" max="10">
                <input type="hidden" name="media" value="<?= $media ?>">
                <button type="submit">Enviar Recuperação</button>
            </form>
        <?php endif; ?>
    </div>
</body>
</html>
