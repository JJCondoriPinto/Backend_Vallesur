FROM bitnami/laravel:9

RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    libssl-dev \
    autoconf \
    && pecl install mongodb \
    && docker-php-ext-enable mongodb \
    && docker-php-ext-install zip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /app
COPY . .

RUN composer install
