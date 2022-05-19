FROM   debian:buster

COPY tools/setup.sh .
COPY tools/config.inc.php .
RUN chmod 660 config.inc.php
RUN  apt update  -y
RUN  apt upgrade -y
RUN apt -y install php7.3-fpm php7.3-common php7.3-mysql php7.3-xml php

CMD sh setup.sh