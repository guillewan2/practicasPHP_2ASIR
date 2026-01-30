FROM php:8.2-apache

# Install common PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql
