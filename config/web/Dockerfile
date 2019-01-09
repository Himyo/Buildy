FROM php:7.2-apache

RUN apt-get update -y && \
    apt-get install -y libpq-dev libpng-dev libfreetype6-dev libyaml-dev
RUN docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
   && docker-php-ext-install pdo pdo_pgsql pgsql

RUN pecl install yamL

RUN docker-php-ext-configure gd \
        --with-freetype-dir=/usr/include/freetype2 \
    && docker-php-ext-install gd


# Workaround for write permission on write to MacOS X volumes
# See https://github.com/boot2docker/boot2docker/pull/534
RUN usermod -u 1000 www-data

# Enable Apache mod_rewrite
RUN a2enmod rewrite