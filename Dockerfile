FROM php:8.1
FROM bitnami/laravel:9

WORKDIR /app
COPY . .
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN pecl install mongodb && docker-php-ext-enable mongodb
RUN composer install
