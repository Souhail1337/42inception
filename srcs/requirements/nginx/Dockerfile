FROM debian:buster
EXPOSE 80 443 3606
RUN apt update -y
RUN apt upgrade -y
RUN apt install nginx -y
RUN apt install openssl
RUN apt install apt-utils -y
RUN mkdir /etc/nginx/ssl
RUN chmod -R 600 /etc/nginx/ssl
