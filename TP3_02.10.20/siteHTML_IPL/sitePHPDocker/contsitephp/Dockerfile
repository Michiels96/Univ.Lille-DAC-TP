FROM php:7.2.8-apache-stretch
RUN docker-php-ext-install pdo_mysql
MAINTAINER Olivier Choquet
EXPOSE 80
COPY sitePHP.conf /etc/apache2/sites-available/000-default.conf
COPY siteBonneNouvelles /var/www/sitePHP
# modifier éventuellement le nom du conteneur et mdp de passe dans Db.class.php
# docker utilisera au niveau réseau le nom du conteneur pour atteindre le conteneur de la DB
COPY Db.class.php /var/www/sitePHP/models/Db.class.php
CMD apache2ctl -D FOREGROUND

