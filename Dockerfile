# Use official PHP + Apache image
FROM php:8.2-apache

# Install required PHP extensions
RUN docker-php-ext-install mysqli

# Enable Apache mod_rewrite (not required but good practice)
RUN a2enmod rewrite

# Copy application files into container
COPY . /var/www/html/

# Set permissions
RUN chown -R www-data:www-data /var/www/html
