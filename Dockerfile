FROM php:8.1-apache

RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    && docker-php-ext-install zip


RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

FROM bitnami/laravel:9
RUN brew install autoconf
RUN pecl install mongodb && docker-php-ext-enable mongodb
WORKDIR /app
COPY . .
RUN composer install
