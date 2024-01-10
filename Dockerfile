# Use the PHP 8.1 with Apache image as the base
FROM php:8.1-apache

# Install system dependencies and MariaDB
RUN apt-get update && \
    apt-get install -y mariadb-server pwgen && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Enable Apache mod_rewrite
RUN docker-php-ext-install mysqli pdo_mysql
RUN a2enmod rewrite

COPY . /app

# Copy the application code to the container
COPY ./php /var/www/html
# copying php project files to image makes developing harder!!!

# Update the Apache configuration to point to /var/www/html/www (where your index.php is)
RUN echo '<VirtualHost *:80>\n\
    DocumentRoot /var/www/html\n\
    ServerName localhost\n\
    <Directory /var/www/html>\n\
        AllowOverride All\n\
        Require all granted\n\
    </Directory>\n\
</VirtualHost>' > /etc/apache2/sites-available/000-default.conf

# Expose port 80
EXPOSE 80

# Copy start.sh and make it executable
COPY start.sh /start.sh
RUN chmod +x /start.sh

VOLUME /php/api/lecturers/

# Start Apache and other services
CMD ["/start.sh"]
