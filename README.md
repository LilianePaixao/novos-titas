# Find more information on how to run codes' **Novos Titãs**

## Requirements
- PHP
- PHP Composer
- [Docker](https://docs.docker.com/engine/install/ubuntu/)
- Docker Compose

## How do you run the project?

1) Go to folder project.
2) Run the command in your terminal `composer install`
3) Run the command `php -S localhost:8585`

Daí abrirá o índice principal então selecione o exercício que deve ser testado.

### Run the database
#### exercicio-banco-dados
1) Go to the folder `exercicio-banco-dados`
2) Run the command: `docker-compose up -d`
3) Import the database `/exercicio-banco-dados/clientes.sql`

Tips: 
- [Import database using the phpMyAdmin](https://www.youtube.com/watch?v=jW5lrS6EUPM)
- Look the `docker-compose.yml` to see others settings.


### Run the tests
1) Got to folder project.
2) Run the command

```bash
php vendor/bin/codecept run --steps
```
3) If necessary clean the cache run the command 
```bash
vendor/bin/codecept clean
```
> More information
- https://codeception.com/

### To run Databases

- To run project
/exercicio14
docker-compose up -d
Import database Estudantes.sql (where: /exercicio14/Estudantes.sql)

- To run project exercicio banco de dados
/exercicio-banco-dados
docker-compose up -d
Import database clientes.sql (where:/exercicio15/clientes.sql)

- To run project exercicio 15
/exercicio15
docker-compose up -d
Import database Cientistas.sql (where:/exercicio15/Cientistas.sql)

- To run project exercicio 16
/exercicio16
docker-compose up -d
Import database Numeros.sql (where:/exercicio16/Numeros.sql)









