FROM debian:buster
RUN apt update -y
RUN apt upgrade -y 

ARG FTP_USER
ARG FTP_PASSWORD



RUN apt-get install -y vsftpd

COPY tools/vsftpd.conf /etc/vsftpd.conf

COPY tools/vsftpd.userlist /etc/vsftpd.userlist

RUN mkdir /var/run/chroot-secured
RUN useradd -ms /bin/bash ${FTP_USER}
RUN echo ${FTP_USER}:${FTP_PASSWORD} | chpasswd

COPY tools/setup.sh .
RUN chmod +x setup.sh

CMD ["bash", "./setup.sh"]