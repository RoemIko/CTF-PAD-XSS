FROM php:7.1-apache
RUN docker-php-ext-install mysqli
EXPOSE 8080 80 433 3306

