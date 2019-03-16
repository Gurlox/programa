## Instalation

1. Make .env file (base on .env.dist)
2. composer install
3. docker-compose build
4. docker-compose up
5. run src/menu.sql command
6. php vendor/bin/doctrine orm:schema-tool:update --force --dump-sql
