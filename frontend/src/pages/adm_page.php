<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>
    <header>
        <h1>Painel Administrativo</h1>
        <nav>
            <a href="../../../index.html">Sair</a>
        </nav>
    </header>

    <main class="painel-administrativo">
        <section>
            <h2>Solicitações dos Serviços</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tipo de Serviço</th>
                        <th>Descrição</th>
                        <th>Endereço</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require "../../../backend/conexao.php";

                    $sql = "SELECT * FROM solicitacoes";
                    $stmt = $pdo->query($sql);

                    while ($solicitacao = $stmt->fetch()) {
                        echo "<tr>";
                        echo "<td>{$solicitacao['id']}</td>";
                        echo "<td>{$solicitacao['tipo_servico']}</td>";
                        echo "<td>{$solicitacao['descricao']}</td>";
                        echo "<td>{$solicitacao['endereco']}</td>";
                        echo "<td>{$solicitacao['status']}</td>";
                        echo "<td>
                                <form method='POST' action='../../../backend/editar_status.php'>
                                    <select name='status' onchange='this.form.submit()'>
                                        <option value='pendente' " . ($solicitacao['status'] == 'pendente' ? 'selected' : '') . ">Pendente</option>
                                        <option value='em andamento' " . ($solicitacao['status'] == 'em andamento' ? 'selected' : '') . ">Em Andamento</option>
                                        <option value='concluido' " . ($solicitacao['status'] == 'concluido' ? 'selected' : '') . ">Concluído</option>
                                    </select>
                                    <input type='hidden' name='id' value='{$solicitacao['id']}'>
                                </form>
                                <form method='POST' action='../../../backend/excluir_solicitacao.php'>
                                    <input type='hidden' name='id' value='{$solicitacao['id']}'>
                                    <button type='submit'>Excluir</button>
                                </form>
                              </td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </main>
</body>

</html>