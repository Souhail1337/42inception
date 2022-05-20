
chown -R $FTP_USER:$FTP_USER /var/www/html
chown -R $FTP_USER:$FTP_USER /var/run/chroot-secured

/usr/sbin/vsftpd /etc/vsftpd.conf
