#!/bin/sh
apt-get update  >/dev/null
apt-get install apache2 php5 libapache2-mod-php5 -y
sed "s/DocumentRoot \/var\/www/DocumentRoot \/var\/www\/web/g" /etc/apache2/sites-available/default > /etc/apache2/sites-available/default.new
mv /etc/apache2/sites-available/default.new /etc/apache2/sites-available/default
service apache2 restart
