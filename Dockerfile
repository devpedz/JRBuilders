FROM php:8.3-apache
RUN a2enmod rewrite 
RUN docker-php-ext-install pdo pdo_mysql
RUN apt-get update \
    && apt-get install -y libzip-dev \
    && apt-get install -y zlib1g-dev \
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-install zip \
    && docker-php-ext-install mysqli
FROM dahirmuhammaddahir/secureng-php-apache

WORKDIR /var/www/html

COPY . .

RUN composer update && \
    composer install && \
    cd thirdparty/grpc-fingerprint-engine/src/php/ && \
    composer update && \
    composer install && \
    apt update && apt install -y net-tools

