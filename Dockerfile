FROM php:7.2-fpm

RUN useradd me && pecl install xdebug \
    && docker-php-ext-enable xdebug

USER me    