DIR="/var/www/html/showcase"

apt install wget -y

mv ./srcs /var/www/html/showcase/
mv -rf /var/www/html/showcase/srcs/* ../
service php7.3-fpm start
service php7.3-fpm stop
php-fpm7.3 -F -R

