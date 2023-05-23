FROM php:7.3-apache
# FROM php:7.0-fpm
COPY src/ /var/www/html/
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
EXPOSE 80