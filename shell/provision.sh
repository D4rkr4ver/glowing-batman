#!/usr/bin/env bash

echo ""
echo "************************"
echo "Installing Apache & PHP5"
echo "************************"
apt-get update
apt-get install -y apache2 php5 libapache2-mod-php5

echo ""
echo "***************************************"
echo "linking Vagrant web dir to DocumentRoot"
echo "***************************************"
rm -rf /var/www
ln -fs /vagrant/web /var/www
echo "Done!"

echo ""
echo "*************************"
echo "Enabling .htaccess module"
echo "*************************"
a2enmod rewrite
sed -i '/AllowOverride None/c AllowOverride All' /etc/apache2/sites-available/default
service apache2 restart
