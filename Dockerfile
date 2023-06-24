FROM php:8.1

RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip

RUN pecl install mongodb && docker-php-ext-enable mongodb

FROM bitnami/laravel:9
WORKDIR /app
COPY . .
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer install
