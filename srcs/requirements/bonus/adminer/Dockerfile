FROM debian:buster

RUN apt update
RUN apt install -y php7.3-fpm
COPY /tools/start.sh /
CMD [ "bash", "start.sh" ]
