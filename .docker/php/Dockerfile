FROM php:8.1.19-fpm

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

RUN docker-php-ext-install pdo_mysql && docker-php-ext-enable pdo_mysql
