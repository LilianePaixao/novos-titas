# My first makefile

install: 
	docker-compose down
	docker-compose up -d
	sleep 25s
	docker exec -i exercicio19_dbMysql_1 sh -c "exec mysql -uroot -pL1l1@n3" < exercicios19.sql
	cd ../ && php -S localhost:8585

liga:
	docker-compose down
	docker-compose up -d

import:
	docker exec -i exercicio19_dbMysql_1 sh -c "exec mysql -uroot -pL1l1@n3" < exercicios19.sql
	cd /home/liliane/projetos/novos-titas && php -S localhost:8585
test: 
	cd /home/liliane/projetos/novos-titas && php vendor/bin/codecept run acceptance Exercicio19Cest
down:
	docker-compose down