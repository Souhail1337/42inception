FROM debian:buster
COPY tools/wordpress wordpress

COPY tools/setup.sh setup.sh
RUN chmod +x setup.sh

COPY tools/www.conf www.conf

CMD ["sh", "setup.sh"]