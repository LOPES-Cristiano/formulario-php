# Formulário PHP com CodeIgniter 4

Este projeto é um exemplo de aplicação utilizando o framework PHP CodeIgniter 4, seguindo o padrão MVC. Ele demonstra a criação de um formulário com validação e persistência de dados.

## Tecnologias Utilizadas

- PHP 8.x
- CodeIgniter 4.x
- Composer
- MySQL (ou outro banco de dados compatível)

## Instalação

### 1. Clone o repositório

```bash
git clone https://github.com/LOPES-Cristiano/formulario-php.git
cd formulario-php
```

### 2. Instale as dependências via Composer

```bash
composer install
```

### 3. Configure o ambiente

- Renomeie o arquivo `.env.example` para `.env`
- Atualize as configurações de banco de dados e outras variáveis conforme necessário

### 4. Execute as migrações

```bash
php spark migrate
```

### 5. Inicie o servidor de desenvolvimento

```bash
php spark serve
```

Depois disso, acesse no navegador:

```
http://localhost:8080
```

## Estrutura do Projeto

```
app/
├── Config/
├── Controllers/
├── Models/
├── Views/
public/
writable/
.env
composer.json
```
