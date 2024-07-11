Para configurar o banco de dados necessário para este projeto, execute o script `cadastro.sql`. Certifique-se de ajustar as configurações de conexão ao banco de dados conforme necessário.

### Estrutura do Banco de Dados

Este projeto utiliza um banco de dados MySQL chamado `cadastro`. A tabela `usuarios` é utilizada para armazenar informações dos usuários do sistema.

A tabela `usuarios` possui os seguintes campos:

- `id`: Identificador único do usuário.
- `nome`: Nome do usuário.
- `email`: Endereço de email do usuário.
- `senha`: Senha do usuário (armazenada de forma segura).
- `data_nasc`: Data de nascimento do usuário.

Consulte o script `cadastro.sql` para obter detalhes completos sobre a criação do banco de dados e da tabela.
