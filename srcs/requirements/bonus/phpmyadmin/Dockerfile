FROM debian:buster

RUN apt update -y
RUN apt upgrade -y


COPY tools/setup.sh .
COPY tools/config.inc.php .

RUN chmod +x setup.sh

CMD sh setup.sh