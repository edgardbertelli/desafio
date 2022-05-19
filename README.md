# Desafio

## Como iniciar a aplicação

- Abra o terminal e baixe o repositório

`git clone https://github.com/edgardbertelli/desafio.git`

- Entre na diretório do projeto

`cd desafio/`

- Copie o conteúdo do `.env.example` para um arquivo `.env` na raiz do projeto.
- Configure os dados do seu banco de dados local
```
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE='nome do meu banco de dados'
DB_USERNAME='meu usuário'
DB_PASSWORD='minha senha'
```
- Instale as dependências do projeto digitando `composer install`
- Crie as tabelas e injete alguns dados digitando `php artisan migrate --seed`
- Finalmente, inicie a aplicação digitando `php artisan serve`

## Descrição

A autenticação é feita usando a biblioteca JWT. Uma vez o usuário logado com seu e-mail e senha, é retornado um token no header da resposta da requisição (Access-Token). Este deverá ser usado para as próximas requisições e é válido por 60 minutos.

## Dados de teste
- Login
```
e-mail: bertelliedgard@gmail.com
password: Cz3rny385
```

## Postman
https://documenter.getpostman.com/view/9457818/UyxnF5bL
