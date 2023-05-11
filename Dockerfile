FROM php:8.1-apache

COPY . /var/www/html/

RUN apt-get update && apt-get install -y \
    libonig-dev \
    libzip-dev \
    zip \
    unzip \
    && docker-php-ext-install pdo_mysql mbstring zip \
    && a2enmod rewrite