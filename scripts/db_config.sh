#!/bin/bash

# Update Lists
echo -e "\n--=== Update list ===--\n"
sudo apt-get update

# Preset MySQL Server root password
echo -e "\n--=== Set MySQL root password ===--\n"
sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password password qwe123@'
sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password_again password qwe123@'

# MySQL-Server installation
echo -e "\n--=== MySQL Installing ===--\n"
sudo apt-get -y install mysql-server

# Allow connection from other hosts
echo -e "\n--=== Allow reote connection to MySQL ===--\n"
sudo mv /etc/mysql/my.cnf /etc/mysql/my.cnf.backup
sudo cp /vagrant/my.cnf /etc/mysql/my.cnf
sudo service mysql restart
# mysql -uroot -pqwe123@ -e "GRANT ALL PRIVILEGES ON *.* TO 'root'@'%' IDENTIFIED BY 'qwe123@' WITH GRANT OPTION;"
# mysql -uroot -pqwe123@ -e "FLUSH PRIVILEGES;"

# Create a new database
echo -e "\n--=== Create MySQL Database ===--\n"
mysql -uroot -pqwe123@ -e "CREATE DATABASE IF NOT EXISTS dbname;" >> /vagrant/vm_build.log 2>&1
mysql -uroot -pqwe123@ -e "show databases;"

# Create a new user
echo -e "\n--=== Create MySQL User ===--\n"
mysql -uroot -pqwe123@ -e "grant all privileges on dbname.* to 'dbuser'@'%' identified by 'qwe123@'" > /vagrant/vm_build.log 2>&1

