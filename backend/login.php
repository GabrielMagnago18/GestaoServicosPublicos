<?php
session_start();

require 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = $pdo->prepare('SELECT * FROM usuarios WHERE email = :email');
    $query->bindParam(':email', $email);
    $query->execute();
    $user = $query->fetch();

    if ($user && password_verify($password, $user['senha'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['nome'] = $user['nome'];
        $_SESSION['roles'] = $user['roles'];

        // Verifica o role do usuário e redireciona para a página correspondente
        if ($user['roles'] === 'user') {
            header('Location: ../frontend/src/pages/painel_page.php');
        } elseif ($user['roles'] === 'admin') {
            header('Location: ../frontend/src/pages/adm_page.php');
        }
        exit();
    } else {
        echo "Email ou senha inválidos!";

        // Redireciona de volta ao login se houver falha
        echo "<button onclick=\"window.location.href='../index.html'\">Voltar ao Login</button>";
        exit();
    }
}
