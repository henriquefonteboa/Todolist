FROM php:7.4-apache

RUN docker-php-ext-install mysqli

RUN docker-php-ext-enable mysqli

RUN apachectl restart

COPY . /var/www/html

EXPOSE 80