# IMOVEL GUIDE - TESTE PRÁTICO DE PROGRAMAÇÃO

# NOME: JACKSON DA SILVA SANTOS

## Requisitos Funcionais

- [x] Criar uma página HTML contendo os campos: CPF, Creci e Nome, além de um botão "Enviar".
- [x] CPF deve ter 11 caracteres.
- [x] Creci e Nome devem ter pelo menos 2 caracteres.
- [x] Criar um banco de dados em MySQL.
- [x] Utilizar PHP para realizar o cadastro dos dados na tabela `corretores` com os campos `id`, `name`, `cpf`, `creci`.
- [x] Garantir que os dados sejam persistidos no banco de dados e que não dependam do armazenamento local do navegador.
- [x] Após o envio do formulário, os dados devem ser gravados no banco de dados.
- [x] O formulário deve ser redirecionado de volta à página com os campos limpos após o envio.
- [x] Mostrar os dados da tabela `corretores` em uma tabela logo abaixo do formulário.
- [x] Para cada registro na tabela, incluir um botão de "Editar" e um botão de "Excluir".
- [x] Implementar a função para excluir um registro da tabela `corretores`.

## Requisitos Não Funcionais

- [x] Deve ser possível editar os dados cadastrados, carregando as informações no formulário.
- [x] O botão "Enviar" deve ser substituído por "Salvar" quando o usuário estiver editando um registro.
- [x] Mostrar mensagens informando se a operação de Cadastro, Edição ou Exclusão foi realizada com sucesso, exibindo essas mensagens acima do formulário.
- [x] Validar a quantidade de caracteres dos campos CPF, CRECI e Nome no lado do servidor (PHP), garantindo que os dados não sejam inseridos ou atualizados sem passar pela validação.
- [x] Utilizar boas práticas de programação, como tratamento de erros e exceções, para garantir a integridade e a robustez do sistema.
