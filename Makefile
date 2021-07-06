

SRC = ./srcs/docker-compose.yml

all :
	sudo docker-compose -f ${SRC} build
up :
	sudo docker-compose -f ${SRC} up -d --remove-orphans
start :
	sudo docker-compose -f ${SRC} start
down :
	sudo docker-compose -f ${SRC} down
volumes :
	sudo docker volume ls 

wordress :
	sudo docker container exec -it wordpress bash
nginx :
	sudo docker container exec -it nginx bash
mariadb :
	sudo docker container exec -it mariadb bash

clean : down
	sh srcs/requirements/tools/clean.sh
fclean : clean

re : fclean all up