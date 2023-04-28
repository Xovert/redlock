# SET Base Image using PHP 8.1.18 + Apache2 Web server
FROM php:8.1.18-apache 

# Set WORKDIR
WORKDIR /var/www/html/

# Install sqlite3 and pdo extension for php
RUN apt-get update && \
    apt-get install -y sqlite3 && \
    docker-php-ext-install pdo

# Copy Web Contents to root folder for web hosting.
COPY index.php redlock-db.sql ./

# IMPORT backup database Redlock, and turn it into SQLite db.
RUN sqlite3 ./Redlock.sqlite < ./redlock-db.sql

# # Change Ownership and Permission of WORKDIR
RUN chown -R www-data:www-data . && \
    chmod -R o-wx .

# Open Listen Port 80 In Container For Port Connection
EXPOSE 80

# Run Apache Web Server in foreground using standard apache2-foreground script
CMD ["apache2-foreground"]