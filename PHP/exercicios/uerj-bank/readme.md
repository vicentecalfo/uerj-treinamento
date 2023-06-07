# To do
1. Renomear a função includeWithVariables -> buildTemplate (functions.php) : Realizar as modificações nos controles;
2. Criar na raíz do projeto uma pasta para os arquivos de configuração:
    * Criar 3 arquivos: app.php, database.php;
3. Fazer o registro de app.php (config) no arquivo index.php;
3. Atacar o problema de arquivos relativos longos (resolve path);
4. Resolver o problema do arquivo "functions":
    * criar um arquivo só para rotas (router.php) -> registrar no bootstrap da app (index.php)
    * Melhorar a função que gera os templates (view) -> criar o arquivo render.php
    * Remover as chamadas do arquivo functions (pois ele cai ser apagado);
4. Criar um arquivo de bootstrap para carregar as funções globais (bootsrtrap/app)
    * mudar o carregamento dos controllers no index.php
4. mudar os controllers para class (para podermos criar "ciclos de vida da app")
4. separar as partes de usecase e controllers
4. Criar a função de acesso a banco de dados (functions/Database.php);
    * functions/Database.php
5. Criar página de cadastro de conta
5. Criar página de sucesso
5. Criar página de login
5. criar pagina de logout
5. criar função de redirecionamento (router.php)
5. alterar função de rota para podermos determinar se a rota deve ter autenticação ou não
6. Criar o arquivo de autenticação (registrar no bootsrtap)
    * testar se usuario esta logado
    *  criar sessao
    * destruir sessao
    * criar a guarda das rotas
    * no bootstrap abrir a sessoes
7. proteger todas as rotas (que precisam ser restritas)
8. Mudar o dashboard para pegar o nome da sessão
8. criar caso de uso e repositorio para buscar dados de uma conta
9. criando a camada de DTO
    * formatando o valor da moeda
    * criando formatação de dinheiro e o DTO de conta
    * mudando o dashboard
10. criando DTO para usuário
    * removendo o campo senha antes de guardar em sessao
    * criando no dto o fullName
11. criando extrato
    * criando DTO de extrato para formatar R$ e Data
    * customizando os campos da tabela usando objeto literal
    * criando os htmls pipes para customizar as celulas desejadas



