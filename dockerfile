FROM php:8.0-apache
RUN apt-get update && apt-get upgrade -y
RUN docker-php-ext-install mysqli  pdo_mysql
EXPOSE 80