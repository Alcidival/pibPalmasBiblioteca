<?php
// Simulação básica de autenticação. Substitua isso com lógica de autenticação real.
$validUser = 'teste';
$validPass = '123';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $validUser && $password === $validPass) {
        // Autenticação bem-sucedida, redirecionar ou realizar ações necessárias.
        echo 'Login bem-sucedido!';
    } else {
        // Credenciais inválidas, exibir mensagem de erro.
        echo 'Credenciais inválidas.';
    }
}
?>
