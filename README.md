## Aplicação para fins de teste

A seguinte aplicação foi construida utilizando o framework laravel, juntamente com bootstrap e jquery mask.

## A Aplicação deverá fazer

Crie uma página de contato que contenha os seguintes campos:

- Nome
- E-mail
- Telefone
- Mensagem
- Arquivo Anexo

**A criação dessa página deve obedecer os seguintes requisitos:**

- Os dados enviados deverão ser armazenados em um banco de dados e conter, além das informações exibidas, o ip do remetente e a data e hora do envio.

**Os dados informados devem ser validados utilizando as seguintes regras:**

- Todos os campos são obrigatórios;
- O e-mail deve ser válido;
- O telefone deve ser válido;
- O arquivo deve ter no máximo 500kb e só deve ser aceito se o arquivo for pdf, doc, docx, odt ou txt;
- O arquivo enviado deve ser armazenado em disco. Apenas o caminho do arquivo deve ser armazenado no banco de dados.
- Uma mensagem deve ser enviada com as informações submetidas no formulário para um e-mail definido em um arquivo de configuração.

Testes automatizados devem ser escritos para garantir que a página funciona como esperado.


## Instruções

A aplicação foi construida em cima do framework laravel, utilizando o ambiente laradock (docker com pre-set das libs necessárias para a utilização do laravel)

O banco de dados utilizado para  gravar os dados da aplicação foi o mysql.

O email foi configurado para utilizar os logs do laravel para simular o envio do mesmo. Para envio de emails configurar no .env o smtp server ou o mailtrap;

O arquivo .env segue no repositório

Para guardar os arquivos foi criado um diretório na pasta storage/apps chamados documents

**Passo a Passo** 
- Instalar os pacotes necessários conforme o [Instruções - Seção Server Requirements](https://laravel.com/docs/6.x), ou utilizar o [Laradock](https://laradock.io/)
- Instalar o [Nodejs](https://nodejs.org/en/download/) 
- Criar um banco de dados no Mysql para a aplicação

Na pasta do projeto digitar os comandos em ordem:
- composer install
- npm install
- php artisan preset bootstrap
- npm install && npm run dev
- editar o arquivo .env para configuração da base de dados (DB_HOST, DB_DATABASE, DB_USERNAME, DB_PASSWORD)
- php artisan config:cache
- php artisan migrate
- caso não esteja usando nenhum servidor para a aplicação, executar o comando php artisan serve
