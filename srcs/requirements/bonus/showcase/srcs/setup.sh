DIR="/var/www/html/showcase"

apt install wget -y
#mkdir /var/www/html/showcase
mv index.html /var/www/html/showcase
mv index.css /var/www/html/showcase
mv test.js /var/www/html/showcase
chown -R www-data:www-data /var/www/html/showcase

service php7.3-fpm start
service php7.3-fpm stop
php-fpm7.3 -F -R

