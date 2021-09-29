#Instalando PHP
#Adicionando repositórios de terceiros
sudo apt-get install software-properties-common
sudo add-apt-repository ppa:ondrej/php
sudo add-apt-repository ppa:ondrej/apache2
sudo apt update

sudo apt install php7.4 libapache2-mod-php7.4 php-common php7.4-cli php7.4-common php7.4-json php7.4-opcache php7.4-readline

#sudo apt install php7.4-curl php7.4-gd php7.4-json php7.4-mbstring php7.4-mcrypt

#sudo apt install php-fpm php-mysql php-mbstring php-xml php-bcmath #php-mcrypt php-xm
#Instalar Composer no sistema
sudo curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer

#Instalar o projeto em um determinado dominio/local
composer create-project laravel/laravel example-app
