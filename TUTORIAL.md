# Tutorial de instalação - Projeto Farmácia Fácil Laravel
_Autores:_  
Astrogilda da Silva  
Yuri Silva  
Yves Cabral  

## 0 Requisitos
 * Linux
 * PHP versão 7.0 (no mínimo)
 * Extensões PHP: OpenSSL, PDO, SQLite, Mbstring, Tokenizer, e XML.
 * [Composer](https://getcomposer.org/download)
 * [Git](https://git-scm.org)

## 1 Instalando o projeto

Primeiro, será necessário fazer uma cópia local (clonar) do repositório Git. Para isso execute o seguinte comando:
```sh
git clone https://github.com/yvescabral/farmacia-facil-laravel.git
```

Em seguida, devemos acessar o diretório do projeto e instalar as dependências do projeto usando o Composer.
```sh
cd farmacia-facil-laravel
composer install
```

## 2 Configurando projeto

Agora vamos criar o arquivo de ambiente usado pela aplicação Laravel criaremos uma chave.
```sh
cp .env.example .env
php artisan key:generate
```

Para criar um arquivo vazio que servirá como banco de dados SQLite e criar as tabelas execute o seguinte comando:
```sh
touch database/database.sqlite
php artisan migrate
```

## 3 Executando

Para executar o projeto e acessá-lo pelo navegador use os seguintes comandos
```sh
php artisan serve
```
Agora a aplicação poder ser acessada pelo endereço IP local na porta 8000.
