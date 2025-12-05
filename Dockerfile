FROM php:8.2-apache

# Install mysqli and PDO MySQL extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Enable Apache mod_rewrite (useful for frameworks)
RUN a2enmod rewrite

# Copy project files into the container (optional if using volumes)
COPY ./src /var/www/html/

# Expose port 80 (already handled by docker-compose)
EXPOSE 80
