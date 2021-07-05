FROM debian:buster 
RUN apt update -y
RUN apt upgrade -y
RUN apt install mariadb-server -y
RUN apt install -y ufw iptables
RUN ufw allow 3306
COPY srcs/inception_db.sql .


COPY srcs/conf conf
COPY srcs/script.sh /script.sh
RUN chmod +x script.sh
CMD ["sh", "script.sh"]