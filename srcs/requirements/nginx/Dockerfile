FROM debian:buster
RUN apt update -y
RUN apt upgrade -y
RUN apt install nginx -y
RUN apt install openssl
RUN mkdir /etc/nginx/ssl
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/nginx/ssl/nginx.key -out /etc/nginx/ssl/nginx.crt -subj "/C=MA/ST=SRAGHNA /L=Benguerir /O=1337/OU=Cluster/CN=localhost/emailAddress=admin@localhost.com"
RUN echo "127.0.0.1 sel-fcht.42.fr" > /etc/hosts
COPY src/default /etc/nginx/sites-available/
CMD ["nginx","-g","daemon off;"]