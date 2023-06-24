FROM bitnami/laravel:9
WORKDIR /app
COPY . .
RUN pecl install mongodb && docker-php-ext-enable mongodb
RUN composer install
