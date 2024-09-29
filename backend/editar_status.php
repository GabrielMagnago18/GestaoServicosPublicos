<?php
require 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $status = $_POST['status'];

    $sql = "UPDATE solicitacoes SET status = :status WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':status', $status);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    if ($stmt->execute()) {
        header('Location: ../frontend/src/pages/adm_page.php');
    } else {
        echo "Erro ao atualizar o status.";
    }
}
