FROM php:8.0-fpm

MAINTAINER Ikaro C. Laborda <iclaborda@msn.com>

RUN apt update \
    && apt install -y zlib1g-dev g++ git libicu-dev zip libzip-dev zip libpng-dev \
    && docker-php-ext-install intl opcache pdo pdo_mysql gd \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && pecl install apcu \
    && docker-php-ext-enable apcu \
    && docker-php-ext-install sockets \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip

WORKDIR /var/www/gqlblog

RUN mkdir -p /tmp/ && chmod 777 -R /tmp/ && touch /tmp/xdebug.log

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

#Install NodeJS
RUN curl -sL https://deb.nodesource.com/setup_14.x | bash - \
    && apt-get install -y nodejs

COPY --chmod=755 entrypoint.sh /usr/local/bin/

ENTRYPOINT ["entrypoint.sh"]
