# ────────────────────────────────────────────────────────────────
# Dockerfile  (for Render ▶ Environment = “Docker” Web Service)
# ────────────────────────────────────────────────────────────────
FROM php:8.2-apache

# 1️⃣ System deps for Composer / zip handling / PDO
RUN apt-get update && apt-get install -y \
        git unzip libzip-dev && \
    docker-php-ext-install pdo_mysql

# 2️⃣ Enable mod_rewrite (pretty URLs)
RUN a2enmod rewrite

# 3️⃣ Install Composer (pull binary from the official Composer image)
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# 4️⃣ Copy only composer files first (better Docker cache)
WORKDIR /var/www/html
COPY composer.json composer.lock ./

# 5️⃣ Install PHP libraries (PHPMailer, phpdotenv, …)
RUN composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader

# 6️⃣ Copy your application source (everything **except** vendor + .env, because they’re in .gitignore)
COPY . .

# 7️⃣ Make Apache listen on 8080 (Render requirement)
RUN sed -i 's/80/8080/g' /etc/apache2/ports.conf /etc/apache2/sites-enabled/000-default.conf

EXPOSE 8080
CMD ["apache2-foreground"]
