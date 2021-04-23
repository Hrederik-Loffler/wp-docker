FROM php:7.4-apache

RUN apt-get -y update && \
    apt-get -y --no-install-recommends install nano wget \
    libsqlite3-dev \
    libsqlite3-0 && \
    apt-get -y --no-install-recommends install default-mysql-client \
    zlib1g-dev \
    libzip-dev \
    libicu-dev \
    curl \
    libonig-dev && \
    apt-get -y --no-install-recommends install --fix-missing libcurl4 \
    libcurl4-openssl-dev


RUN docker-php-ext-install pdo_mysql && \
    docker-php-ext-install pdo_sqlite && \
    docker-php-ext-install mysqli && \
    docker-php-ext-install curl && \
    docker-php-ext-install tokenizer && \
    docker-php-ext-install json && \
    docker-php-ext-install zip && \
    docker-php-ext-install -j$(nproc) intl && \
    docker-php-ext-install mbstring && \
    docker-php-ext-install gettext && \
    docker-php-ext-install exif

RUN a2enmod headers
RUN a2enmod expires
RUN a2enmod rewrite
RUN service apache2 restart

RUN groupadd --gid=1000 dev && useradd -u 1000 -N -G www-data --gid=1000  -m dev




