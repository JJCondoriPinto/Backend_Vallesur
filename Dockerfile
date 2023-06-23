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

# RUN chown -R www-data:www-data /var/www/html \
#     && a2enmod rewrite

EXPOSE 8000

RUN chmod +x /var/www/html/Backend_Vallesur/artisan

CMD [ "php", "/var/www/html/Backend_Vallesur/artisan", "serve", "--host=0.0.0.0", "--port=80" ]
