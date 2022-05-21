FROM debian:buster

RUN apt update -y
RUN apt-get upgrade -y
RUN apt -y install php7.3-fpm php7.3-common php7.3-mysql php7.3-xml php
RUN mkdir /srcss

COPY ./srcs/. srcs/

COPY srcs/test.js .

COPY ./srcs/setup.sh .
RUN chmod 660 setup.sh

CMD ["bash","./setup.sh"]
