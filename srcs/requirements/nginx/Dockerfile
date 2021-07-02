FROM debian:buster
EXPOSE 80 443 3606

COPY src/script.sh /
RUN chmod 755 /script.sh

RUN apt update -y
RUN apt upgrade -y
RUN apt install nginx -y
RUN apt install openssl

RUN apt install apt-utils -y

RUN mkdir /etc/nginx/ssl
RUN chmod -R 600 /etc/nginx/ssl
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/nginx/ssl/nginx.key -out /etc/nginx/ssl/nginx.crt -subj "/C=MA/ST=SRAGHNA /L=Benguerir /O=1337/OU=Cluster/CN=localhost/emailAddress=admin@localhost.com"

COPY src/default /etc/nginx/sites-available
CMD ["/script.sh"]