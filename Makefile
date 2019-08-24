#!make
DB_CONTAINER_NAME=buildy-db
INIT_SQL_QUERY=CREATE DATABASE IF NOT EXISTS buildy;
DROP_SQL_QUERY=DROP DATABASE buildy
DUMP_FILE=config/db/dump.sql
DB_TARGET=buildy

db-create:
	docker start ${DB_CONTAINER_NAME} 
db-delete:
	docker exec -i ${DB_CONTAINER_NAME} mysql -uroot -ppabuildypa mysql -e "${DROP_SQL_QUERY}"
db-init:
	docker exec -i ${DB_CONTAINER_NAME} mysql -uroot -ppabuildypa mysql -e "${INIT_SQL_QUERY}"
	docker exec -i ${DB_CONTAINER_NAME} mysql -uroot -ppabuildypa "${DB_TARGET}" < "${DUMP_FILE}"

db-stop:
	docker stop ${DB_CONTAINER_NAME}
db-rm:
	docker rm ${DB_CONTAINER_NAME}
db-load:
	make db-stop || true
	make db-rm || true
	make db-create
	sleep 5
	make db-init
db-clean:
	make db-delete
	make db-create
	sleep 5
	make db-init

db-access:
	docker exec -it ${DB_CONTAINER_NAME} mysql -uroot -ppabuildypa ${DB_TARGET}

stopAll:
	docker stop $$(docker ps -qa)
rmAll:
	docker rm $$(docker ps -qa)

start:
	docker-compose up -d
	sleep 5
	ifneq(docker ps -af name=${DB_CONTAINER_NAME}, ${DB_CONTAINER_NAME})
		make stopAll
		make start
		make db-init
	endif

