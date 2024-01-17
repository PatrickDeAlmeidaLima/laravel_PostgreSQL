# Nome do Seu Projeto Laravel

Este é um breve guia sobre como configurar e executar o seu projeto Laravel.

## Requisitos

Antes de começar, certifique-se de ter os seguintes requisitos instalados em seu sistema:

- [PHP](https://www.php.net/) (recomendado PHP 7.4 ou superior)
- [Composer](https://getcomposer.org/)
- [PostgreSQL](https://www.postgresql.org/) (ou outro banco de dados suportado pelo Laravel)

## Configuração do Projeto

1. **Clone o Repositório:**
   ```bash
   git clone https://github.com/PatrickDeAlmeidaLima/laravel_PostgreSQL
   cd seu-projeto-laravel

2. **Instale as Dependências:**
   ```bash
    composer install

3. **Copie o Arquivo .env:**
   ```bash
    cp .env.example .env

4. **Configure o Banco de Dados:**
   ```bash
    Abra o arquivo .env e configure as informações do banco de dados, incluindo DB_CONNECTION, DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME e DB_PASSWORD.

5. **Migrar e Popular o Banco de Dados:**
   ```bash
    php artisan migrate --seed

6. **Executar o Projeto:**
   ```bash
    php artisan serve


7. **Rotas disponiveis**
   ```bash
   /registro
   /usuarios