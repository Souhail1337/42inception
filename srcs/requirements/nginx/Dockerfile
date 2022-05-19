FROM debian:buster
RUN apt update -y
RUN apt upgrade -y
RUN apt -y install php7.3-fpm php7.3-common php7.3-mysql php7.3-xml php
RUN apt install nginx -y
RUN apt install openssl
RUN mkdir /etc/nginx/ssl
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/nginx/ssl/nginx.key -out /etc/nginx/ssl/nginx.crt -subj "/C=MA/ST=SRAGHNA /L=Benguerir /O=1337/OU=Cluster/CN=sel-fcht.42.fr/emailAddress=admin@sel-fcht.42.fr.com"
COPY src/default /etc/nginx/sites-available/

CMD ["nginx","-g","daemon off;"]