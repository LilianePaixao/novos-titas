# Find more information on how to run codes' **Novos Titãs**

# novos-titas
É necessário abrir o terminal e entrar na pasta clonada, e digitar php -S localhost:8585, daí abrirá o índice principal então selecione o exercício que deve ser testado.

### To prepare environment

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
```
php vendor/bin/codecept run --steps

```
**How to run with databases**
1. Usage with docker-compose and arbitrary server
For phpmyadmin, set 
phpmyadmin:
    image: phpmyadmin
    ports:
        - 8080:80 (if this port available)
    environment:
        -PMA_ARBITRARY=1
[dockerhub](https://hub.docker.com/r/phpmyadmin/phpmyadmin/)

- type on terminal to open the cards NVT-107 and NVT-110
~projetos/novos-titas/exercicio-banco-dados/28-crud
docker-compose up
- Fill in the field server: dbMysql
- Fill in the Field username: titas

2. Database
- click in Export (on top in page)
- choice fast Export Method
- choice the format SQL and execute

3. Open phpmyadmin
Type in your browser
```
localhost:8282
```