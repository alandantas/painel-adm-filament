
# Painel Administrativo Laravel 11 com Filament 3 - Utilizando Spatie

### Passo a passo
Clone Repositório
```sh
git clone https://github.com/alandantas/painel-adm-laravel.git
```


Crie o Arquivo .env
```sh
cp .env.example .env
```


Atualize as variáveis de ambiente do arquivo .env
```dosini
APP_NAME="SEU APP"
APP_TIMEZONE='America/Sao_Paulo'
APP_URL=http://localhost:8989

APP_LOCALE=pt_BR
APP_FALLBACK_LOCALE=en
APP_FAKER_LOCALE=pt_BR

DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=root

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```


Suba os containers do projeto
```sh
docker-compose up -d
```


Acessar o container
```sh
docker-compose exec app bash
```


Instalar as dependências do projeto
```sh
composer install
```


Gerar a key do projeto Laravel
```sh
php artisan key:generate
```

Criar as migrate para criação do banco de dados
```sh
php artisan migrate
```

Semear o banco com as Permissões dos usuários
```sh
php artisan db:seed --class=PermissionSeeder
```


Semear o banco com as Funções dos usuários
```sh
php artisan db:seed --class=RoleSeeder
```

Criar o usuário Administrador do banco
```sh
php artisan db:seed --class=UserSeeder

Usuário: admin@mail.com
Senha: 12345678
```


Acessar o projeto
[http://localhost:8989/admin](http://localhost:8989/admin)
