# Etapa de compilación basada en bitnami/laravel:9
FROM bitnami/laravel:9 as builder

# Instalación de dependencias y construcción del proyecto Laravel
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

# Etapa final basada en php:8.2-apache
FROM php:8.2-apache

# Copiar el resultado de la compilación desde la etapa de compilación
COPY --from=builder /app /app


# Expone el puerto 80
EXPOSE 80
