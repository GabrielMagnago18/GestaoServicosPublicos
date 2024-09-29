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

        if ($user['roles'] === 'user') {
            header('Location: ../frontend/src/pages/painel_page.php');
        } elseif ($user['roles'] === 'admin') {
            header('Location: ../frontend/src/pages/adm_page.php');
        }
        exit();
    } else {
        header('Location: ../frontend/src/pages/erro_login.php?error=invalid_credentials');
        exit();
    }
}
