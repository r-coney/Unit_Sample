FROM php:8.1-fpm

RUN apt-get update && apt-get install -y \
    cron \
    gnupg \
    libzip-dev \
    libpng-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    locales \
    unzip \
    vim \
    zip \
    zlib1g-dev \
    zlib1g-dev \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-install \
    pdo_mysql \
    opcache

COPY --from=composer:2.2.5 /usr/bin/composer /usr/bin/composer

COPY ./php.ini /usr/local/etc/php/php.ini
