FROM debian:buster

RUN apt update -y
RUN apt-get update && apt-get upgrade -y
RUN apt -y install php7.3-fpm php7.3-common php7.3-mysql php7.3-xml php
RUN apt install nodejs -y
RUN apt install npm -y
COPY srcs/index.html /var/www/html/showcase/
COPY srcs/index.css /var/www/html/showcase/
COPY srcs/setup.sh /var/www/html/showcase/
COPY srcs/test.js .


#RUN chmod 660 setup.sh

CMD node test.js


