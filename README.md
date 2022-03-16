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

### To run Databases
- Card 113
Import database Estudantes.sql (where: /exercicio14/Estudantes.sql)

- To run project
/exercicio14
docker-compose up -d

- Cards NVT-107 and NVT-110
Import database clientes.sql (where: /exercicio-banco-dados/clientes.sql)

- To run project
/exercicio-banco-dados
docker-compose up -d

### To prepare environment for tests
**How to install the codeception**
* at repo with composer.json because this



```
php vendor/bin/codecept run --steps
```

> More information
[Framework utilizado para testes](https://codeception.com/)

### Where are you
```
/novos-titas

```

1. To run software codes on terminal
```
php -S localhost:8000

```

2. To run tests codes on terminal
```
php -S localhost:8585

```


