FROM php:8-apache

# Install any additional PHP extensions or libraries that you need
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy your PHP application files into the container
COPY src/ /var/www/html/

# Expose the Apache port (80) to the host
EXPOSE 80

