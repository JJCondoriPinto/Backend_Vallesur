FROM php:8.1-fpm

RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    && docker-php-ext-install zip

RUN pecl install mongodb && docker-php-ext-enable mongodb

WORKDIR /var/www/html

COPY . .

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer install

RUN composer require mongodb/mongodb

RUN composer require jenssegers/mongodb

RUN chmod 777 artisan

CMD ["ls", "../"]
