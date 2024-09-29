<?php
require 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];

    $sql = "DELETE FROM solicitacoes WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    if ($stmt->execute()) {
        header('Location: ../frontend/src/pages/adm_page.php');
    } else {
        echo "Erro ao excluir a solicitação.";
    }
}
