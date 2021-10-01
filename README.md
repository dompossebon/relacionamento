# Apenas Estudos - Relacionamento entre Tabelas
PHP 7.4.24, Projeto Laravel Framework 8.61.0, Token, tymon/jwt-auth 1.0.2


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

---------------------------------------------------------

# Relacionamentos

Código de estudo e auxilio para Jr.

Um código simples como modelo para quem esta aprendendo! Apenas um exemplo operacional com um tutorial básico.

- 1 para 1

Cada cliente possui apenas um unico endereço

- 1 para N

Um usuario podera ter muitos artigos

- N para N

Um post pode ter muitas categorias e o inverso tb.
Uma categoria podera ter muitos post

Dica: A grande Sacada está nas 'migrates' e nos 'models'

Links funcionando.
exemplo: http://127.0.0.1:8000/user/1

Espero que esse código simples possa auxiliar novos devs!

---------------------------------------------------------

### 🛠 Tecnologias

As seguintes ferramentas foram usadas na construção do projeto:

- [Laravel v8.61.0](https://laravel.com/docs/8.x)
- [PHP 7.4.23](https://www.php.net/downloads.php#v7.4.23)

Funciona com servidor próprio do laravel(php artisan serve).
Modelo Feito e Testado em Linux Ubunto 20.4

## Começando

Clone o repositório do projeto:

Caso você use HTTPS:

git clone https://github.com/dompossebon/relacionamento.git

---------------------------------------------------------

Após a clonagem, entre no diretório da aplicação:

cd relacionamento

em seguida execute o comandos abaixo:

composer install

Na raiz do projeto localize e Duplique o arquivo .env.example e em seguida renomeie-o para .env usando o comando:

cp .env.example .env

Atenção, o usuário deverá configurar o atributos do banco de Dados em .env

- DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_DATABASE=nome_seu_banco_de_dados
- DB_USERNAME=seu_usuario
- DB_PASSWORD=sua_senha

entao, após realizar tal tarefa, o usuário deverá rodar os comandos:

---------------------------------------------------------

Então rode o comando:

 - php artisan key:generate

 - php artisan jwt:secret
  
 - php artisan migrate:fresh --seed

---------------------------------------------------------

## COLOCANDO O SERVIDOR LARAVEL EM AÇÃO

UTILIZE O COMANDO:

- php artisan serve

Agora basta DIGITAR em seu Brownser e acessar:

-  http://127.0.0.1:8000/

---------------------------------------------------------

## Construído com
Laravel - O framework PHP para artesãos da Web

## by Possebon
## Contato dompossebon@gmail.com

:+1: ## By Possebon

