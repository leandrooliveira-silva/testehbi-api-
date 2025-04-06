🧰 1. Pré-requisitos
•	✅ Postman instalado (ou use Postman Web)
•	✅ Servidor local rodando (ex: XAMPP, WAMP, Laragon ou Apache/Nginx com PHP)
•	✅ Banco de dados testehbi criado e a tabela posts disponível
•	✅ Projeto PHP configurado corretamente na pasta do servidor (ex: htdocs/testehbi-api/)
________________________________________
▶️ 2. Como rodar
•	Acesse pelo navegador:
    http://localhost/testehbi-api/init.php
•	Ou rode pela linha de comando (se preferir):
    php init.php
________________________________________
✅ O que ele faz?
1.	Conecta ao MySQL sem selecionar nenhum banco.
2.	Cria o banco testehbi se ainda não existir.
3.	Usa esse banco.
4.	Cria a tabela posts com os campos corretos.
________________________________________

📦 3. Como Testar
Você pode testar com ferramentas como:
•	Postman
•	Insomnia
Use os métodos HTTP apropriados:
•	POST /posts/create.php com JSON: { "title": "Meu Título", "content": "Conteúdo" }
•	GET /posts/read.php ou GET /posts/read.php?id=1
•	PUT /posts/update.php com JSON: { "id": 1, "title": "Novo Título", "content": "Novo Conteúdo" }
•	DELETE /posts/delete.php com JSON: { "id": 1 }
🧪 3. Testando cada rota no Postman
________________________________________
🟢 Criar um Post
•	Método: POST
•	URL: http://localhost/testehbi-api/posts/create.php
•	Headers:
o	Content-Type: application/json
•	Body (raw JSON):
json
{
  "title": "Meu Primeiro Post",
  "content": "Esse é o conteúdo do post"
}
________________________________________
🔵 Listar todos os posts
•	Método: GET
•	URL: http://localhost/testehbi-api/posts/read.php
________________________________________
🔵 Listar um post específico
•	Método: GET
•	URL: http://localhost/testehbi-api/posts/read.php?id=1
(Substitua o id por um que exista no seu banco)
________________________________________
🟡 Atualizar um post
•	Método: PUT
•	URL: http://localhost/testehbi-api/posts/update.php
•	Headers:
o	Content-Type: application/json
•	Body (raw JSON):
json
{
  "id": 1,
  "title": "Post Atualizado",
  "content": "Novo conteúdo do post"
}
________________________________________
🔴 Excluir um post
•	Método: DELETE
•	URL: http://localhost/testehbi-api/posts/delete.php
•	Headers:
o	Content-Type: application/json
•	Body (raw JSON):
json
{
  "id": 1
}
________________________________________
🧠 Dicas
•	Certifique-se de que o Apache está rodando e o PHP está ativo.
•	Use o botão “Send” no Postman para enviar a requisição e visualizar a resposta.
•	Você pode salvar cada requisição em uma coleção Postman para reutilizar depois.
•	Se quiser, posso montar uma coleção .json do Postman para você importar direto. Deseja isso?
________________________________________



🧠 1. Visão Geral do Projeto (Product Vision)
Criar uma API RESTful simples e funcional usando PHP puro e MySQL que permita operações de CRUD (Create, Read, Update, Delete) sobre uma tabela de posts.
________________________________________
👥 2. Papéis no Scrum
•	Product Owner (PO): Define as funcionalidades da API e prioriza o que deve ser feito primeiro. Ex: “O CRUD de posts é a entrega mínima viável (MVP)”.
•	Scrum Master: Garante que os princípios Scrum estão sendo seguidos e remove impedimentos.
•	Development Team: Devs responsáveis por codificar a API.
________________________________________
📝 3. Backlog do Produto (Product Backlog)
Lista de funcionalidades desejadas:
ID	|História do Usuário	                                                        |Prioridade	                |Estimativa
1	|Como usuário, quero criar um post	                                        |Alta	                    |2 pontos
2	|Como usuário, quero listar posts 	                                        |Alta	                    |2 pontos
3	|Como usuário, quero visualizar um post específico	                        |Média	                    |1 ponto
4	|Como usuário, quero atualizar um post	                                    |Alta                       |2 pontos
5	|Como usuário, quero excluir um post                                        |Alta	                    |2 pontos
6	|Como desenvolvedor, quero configurar a conexão com banco	                |Alta	                    |1 ponto
7	|Como desenvolvedor, quero estruturar o projeto com organização em pastas	|Média	                    |1 ponto
8	|Como usuário, quero testar a API com Postman	                            |Média	                    |1 ponto
________________________________________
⏳ 4. Sprint Planning (Planejamento da Sprint)
Exemplo: Sprint 1 – Duração: 1 semana
Objetivo da Sprint: Ter a API funcionando com todas as rotas de CRUD para posts.
Backlog selecionado:
•	Configurar banco e projeto (6, 7)
•	Implementar todas as rotas de CRUD (1 a 5)
________________________________________
🔁 5. Daily Scrum (Reunião Diária)
Reunião rápida (15 minutos) onde cada membro responde:
1.	O que fiz ontem?
2.	O que farei hoje?
3.	Existe algum impedimento?
Exemplo:
"Ontem implementei a rota de create. Hoje farei a read. Não tenho impedimentos."
________________________________________
🧪 6. Sprint Review (Revisão da Sprint)
Apresentar a API funcional. Testar na frente do PO as rotas usando Postman.
Exemplo:
O PO testa:
•	Envia um POST para criar
•	Envia um GET para listar
•	Envia um DELETE para apagar
Ele valida se a entrega atende aos critérios de aceite.
________________________________________
🔍 7. Sprint Retrospective (Retrospectiva da Sprint)
Momento da equipe refletir:
•	O que foi bem?
•	O que pode melhorar?
•	Ações para a próxima sprint
Exemplo:
“A estrutura de arquivos ficou bem organizada. Mas demoramos para alinhar os testes. Vamos integrar o Postman desde o início na próxima sprint.”
________________________________________
✅ 8. Definição de Pronto (Definition of Done)
Para considerar que uma funcionalidade está “pronta”, ela deve:
•	Ter sido codificada e testada
•	Retornar mensagens e status HTTP apropriados
•	Ser testada via Postman
•	Ter o código revisado (code review, mesmo que simples)
________________________________________
📌 Resumindo
Etapa Scrum	O que acontece no projeto?
Product Backlog	Lista de rotas e configs da API
Sprint Planning	Seleciona rotas a serem feitas
Sprint (Execução)	Desenvolve rotas e organiza o código
Daily Scrum	Devs compartilham progresso
Sprint Review	Demonstra funcionamento da API
Retrospective	Equipe reflete sobre o processo
