FROM debian:buster

RUN apt update -y
RUN apt upgrade -y
COPY tools/config.inc.php .
COPY tools/script.sh .

CMD sh script.sh