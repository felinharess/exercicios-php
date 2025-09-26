<?php
session_start();
$usuarioCorreto = "douglas";
$senhaCorreta = "1234";

$usuario = $_POST['username'] ?? '';
$senha = $_POST['password'] ?? '';

if ($usuario === $usuarioCorreto && $senha === $senhaCorreta) {
    $_SESSION['usuario'] = $usuario;

    header("Location: ../index.html");
    exit;
} else {
    header("Location: login.html?erro=1");
    exit;
}
?>
