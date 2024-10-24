# Use the official PHP image with Apache
FROM php:8.2-apache

# Install required extensions
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy your application files into the Apache server's document root
COPY ./Forms /var/www/html/
COPY ./HTML /var/www/html/
COPY ./CSS /var/www/html/
COPY ./Search_Files /var/www/html/

# Set working directory
WORKDIR /var/www/html/

# Ensure the proper file permissions (adjust as needed)
RUN chown -R www-data:www-data /var/www/html/

# Expose port 80
EXPOSE 80
