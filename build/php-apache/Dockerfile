FROM php:8.2-apache

# Install Composer
RUN apt-get update && \
    apt-get install -y unzip && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


RUN apt-get update && \
    docker-php-ext-install mysqli pdo pdo_mysql