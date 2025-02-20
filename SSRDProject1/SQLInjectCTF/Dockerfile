# Use the official PHP + Apache image
FROM php:8.0-apache

# Install MySQL extension for PHP
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy the website files into the container
COPY src/ /var/www/html/

# Expose port 80 for the web server
EXPOSE 80
