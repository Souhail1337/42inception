FROM debian:buster

RUN apt update -y
RUN apt upgrade -y

RUN apt install tar -y

COPY tools/wordpress-5.5.3.tar.gz /
RUN tar -xzvf wordpress-5.5.3.tar.gz
RUN mv /wordpress/* /var/www/wordpress/

COPY tools/wp-config.php /var/www/wordpress/
COPY RUN chown -R www-data /var/www/wordpress

