<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Painel de Solicitações</title>
  <link rel="stylesheet" href="../styles/style.css" />
</head>

<body>
  <header>
    <h1>Gestão de Solicitações de Serviços Públicos</h1>
    <nav>
      <a href="../../../index.html">sair</a>
    </nav>
  </header>

  <main class="painel-solicitacoes">
    <div class="solicitacoes-container">
      <section class="solicitacao-form">
        <h2>Solicitar um Serviço</h2>
        <form action="../../../backend/enviar_solicitacao.php" method="POST">
          <label for="tipo_serviço">Tipo de Serviço: </label>
          <select name="tipo_serviço" id="tipo_serviço" required>
            <option value="reparo iluminação">Reparo de Iluminação</option>
            <option value="coleta de entulhos">Coleta de Entulhos</option>
          </select>

          <label for="descricao">Descrição:</label>
          <textarea name="descricao" id="descricao" required></textarea>

          <label for="endereco">Endereço:</label>
          <textarea name="endereco" id="endereco"></textarea>

          <button type="submit">Enviar a Solicitação</button>
        </form>
      </section>

      <section class="status-solicitacoes">
        <h2>Status das Solicitações</h2>
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Tipo de Serviço</th>
              <th>Descrição</th>
              <th>Endereço</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <?php
            require '../../../backend/conexao.php';

            $sql = "SELECT * FROM solicitacoes";
            $stmt = $pdo->query($sql);
            while ($solicitacao = $stmt->fetch()) {
              echo "
              <tr>
                <td>{$solicitacao['id']}</td>
                <td>{$solicitacao['tipo_servico']}</td>
                <td>{$solicitacao['descricao']}</td>
                <td>{$solicitacao['endereco']}</td>
                <td>{$solicitacao['status']}</td>
              </tr>
              ";
            } ?>
          </tbody>
        </table>
      </section>
    </div>
  </main>
</body>

</html>