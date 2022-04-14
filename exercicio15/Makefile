# My first makefile

install: 
	docker-compose down
	docker-compose up -d
	echo "Necessario impoartar o banco de dados Cientista.sql"
#	docker exec -i exercicio15_dbMysql_1 sh -c 'exec mysql -uroot -p"L1l1@n3"' < Cientistas.sql
	cd ../ && php -S localhost:8585

test: 
	cd ../ && php vendor/bin/codecept run acceptance Exercicio15Cest