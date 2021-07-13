FROM debian:buster

RUN apt-get update && apt-get upgrade -y
COPY tools/config.sh /config.sh

CMD sh config.sh