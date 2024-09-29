<?php
require 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tipo_servico = $_POST['tipo_serviço'];
    $descricao = $_POST['descricao'];
    $endereco = $_POST['endereco'];

    try {
        $sql = "INSERT INTO solicitacoes (tipo_servico, descricao, endereco, status) 
                VALUES (:tipo_servico, :descricao, :endereco, 'Pendente')";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':tipo_servico', $tipo_servico);
        $stmt->bindParam(':descricao', $descricao);
        $stmt->bindParam(':endereco', $endereco);
        if ($stmt->execute()) {
            header('Location: ../frontend/src/pages/painel_page.php');
        }

        echo "Solicitação enviada com sucesso!";
    } catch (PDOException $e) {
        echo "Erro ao enviar a solicitação: " . $e->getMessage();
    }
}
