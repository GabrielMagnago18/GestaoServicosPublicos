# Gestão de Solicitações de Serviços Públicos

Este projeto é uma aplicação web para a gestão de solicitações de serviços públicos. Ele permite que usuários façam login, submetam solicitações de serviços como reparos ou coletas, acompanhem o status das suas solicitações, e que administradores gerenciem e atualizem o status.

## Tecnologias Utilizadas

- **HTML5**
- **CSS3**
- **JavaScript**
- **PHP**
- **PostgreSQL**
- **XAMPP**

## Estrutura do Projeto

- **frontend/**: Diretório contendo os arquivos de interface do usuário, como HTML, CSS e JavaScript.
  - `index.html`: Página inicial para login.
  - `src/styles`: Arquivo de estilo para todas as páginas.
  - `src/pages`: Arquivos html responsáveis pelas paginas.
  
- **backend/**: Diretório contendo o backend da aplicação, com scripts PHP.
  - `conexao.php`: Conexão com o banco de dados PostgreSQL.
  - `login.php`: Autenticação dos usuários.
  - `enviar_solicitacao.php`: Envia novas solicitações para o banco.
  - `editar_status.php`: Permite atualizar o status de uma solicitação.
  - `excluir_solicitacao.php`: Permite excluir uma solicitação.

## Melhorias

- **Mapa de Localização**: Implementar um mapa para permitir que os cidadãos marquem a localização exata do serviço solicitado. 
- **Notificações por E-mail**: Implementar notificações por e-mail para: Confirmar o recebimento da solicitação ao cidadão.  Notificar sobre a atualização do status da solicitação.
- **Relatórios Simples**: Criar uma funcionalidade para que os administradores gerem relatórios simples, como: Número de solicitações por tipo de serviço; Tempo médio de resposta para cada tipo de serviço.
- **Melhorar a interface do Sistema**: Atualizar a interface para ficar mais agradável visualmente
- **Restrição de Rota**: Restringir a rota que o usuário pode acessar dependendo do seu nível de acesso

## Demonstração do Funcionamento

Clique [aqui](https://drive.google.com/drive/folders/122E3_8wvCfH3pSZT6Z3A-tV_wkcRKx_3?usp=sharing) para assistir à demonstração do site.


## Dificuldades
- A principal dificuldade foi conseguir conectar o site com o banco de dados. Isso ocorreu por conta de conflitos com as configurações do PHP com o PgAdmin.
- Consegui achar uma solução no seguinte link: [aqui](https://stackoverflow.com/questions/17996957/fe-sendauth-no-password-supplied)

