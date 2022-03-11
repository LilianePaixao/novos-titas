# Find more information on how to run codes' **Novos Titãs**

É necessário abrir o terminal e entrar na pasta clonada, e digitar php -S localhost:8585, daí abrirá o índice principal então selecione o exercício que deve ser testado.

### To run Databases
-Card 113
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

**Type on your terminal**
```
composer install
```

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


