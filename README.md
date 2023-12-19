#Descrição do Projeto
  Este é um sistema web de gerenciamento de vendas desenvolvido utilizando HTML, CSS, JavaScript e PHP. O sistema inclui funcionalidades como login, exibição de informações de vendas, inserção de novas vendas, adição de novos vendedores e geração de relatórios.

#Estrutura do Projeto
  O projeto está organizado da seguinte forma:
  
  /seu_projeto
  ├── index.html
  ├── login.php
  ├── dashboard.php
  ├── nova_venda.php
  ├── novo_vendedor.php
  ├── relatorios.php
  ├── css/
  │   └── style.css
  ├── js/
  │   └── script.js
  └── php/
      ├── db_connection.php
      └── functions.php
      
#Como Iniciar
  1. Clone o repositório para o seu ambiente local:
    git clone https://github.com/seu-usuario/seu-projeto.git
  
  2. Configure o seu servidor web (por exemplo, Apache) para servir os arquivos PHP.
  
  3. Importe o banco de dados usando o script fornecido no diretório sql/.
  
  4. Configure as informações do banco de dados no arquivo php/db_connection.php.
  
  5. Abra o navegador e acesse http://localhost/seu_projeto/login.php para iniciar a aplicação.

#Configuração do Banco de Dados
  1. Utilize o script SQL fornecido em sql/ para criar o banco de dados e as tabelas necessárias.

  2. Configure as informações de conexão com o banco de dados no arquivo php/db_connection.php.

Funcionalidades
Login:

Acesse a página de login para autenticar-se.
Dashboard:

Após o login bem-sucedido, acesse o painel principal com as informações de vendas.
Nova Venda:

Adicione novas vendas utilizando o link correspondente no painel.
Novo Vendedor:

Adicione novos vendedores utilizando o link correspondente no painel.
Relatórios:

Gere relatórios a partir do link correspondente no painel.
Estrutura do Código
HTML: Os arquivos HTML estão na raiz do projeto e representam as diferentes páginas do sistema.

CSS: O estilo da aplicação está em css/style.css.

JavaScript: As funcionalidades dinâmicas podem ser implementadas em js/script.js.

PHP: Os scripts PHP estão na pasta php/. db_connection.php cuida da conexão com o banco de dados, e functions.php pode conter funções úteis.
