FROM php:8.2-apache

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy your code
COPY . /var/www/html/

# Expose port (Render expects 8080)
EXPOSE 8080

# Change Apache's listening port to 8080
RUN sed -i 's/80/8080/g' /etc/apache2/ports.conf /etc/apache2/sites-enabled/000-default.conf
