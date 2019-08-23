#!/bin/bash

apt update &> /dev/null
apt-get install -y apache2 php7.2 mariadb-server nginx npm libpng-dev libfreetype6-dev libyaml-dev &> /dev/null
apt-get install -y pdo mysqli pdo_mysql libapache2-mod-php php-mysql &> /dev/null
pecl install yamL &> /dev/null

unzip Buildy
mv www/* /var/www/html
mv ./server /var/wwww

mkdir old

mv /etc/apache2/sites-available/000-default.conf ./old
mv /etc/apache2/apache2.conf ./old
mv /etc/php/7.2/apache2/php.ini ./old

mv ./server/apache2.conf /etc/apache2/
mv ./server/php.ini /etc/php/7.2/apache2
mv ./server/000-default.conf /etc/apache2/sites-available/

a2enmod rewrite &> /dev/null
ufw allow in "Apache Full" &> /dev/null
service apache2 restart &> /dev/null

npm i
npm run watch
chmod -R 770 .
chown -R .

mysql -ubuildy -ppabuildypa buildy < /var/www/config/db/dump.sql
mysql -ubuildy -ppabuildypa buildy < ./init.sql
