FROM bitnami/laravel:9

RUN pecl update-channels \
    apt-get update \
    apt-get install -y autoconf \
    apt-get install -y build-essential \
    pecl install mongodb

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /app
COPY . .
COPY php.ini ../opt/bitnami/php/etc/

ENTRYPOINT [ "/opt/bitnami/scripts/laravel/entrypoint.sh" ]
CMD ["php", "artisan", "migrate"] && [ "/opt/bitnami/scripts/laravel/run.sh" ]
