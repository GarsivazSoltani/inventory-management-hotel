# استفاده از image پایه PHP با Apache
FROM php:8.1-apache

WORKDIR /app

# کپی کردن فایل‌های پروژه به container
COPY . /var/www/html/

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    && docker-php-ext-install pdo_mysql
# نصب وابستگی‌های Composer (اگر نیاز باشد)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-dev --optimize-autoloader

# تنظیم مجوزها
RUN chown -R www-data:www-data /var/www/html

# پورت مورد استفاده
EXPOSE 80

# دستور اجرای Apache
CMD ["apache2-foreground"]




FROM php:8.2-cli
WORKDIR /app
COPY . .
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    && docker-php-ext-install pdo_mysql
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install
CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]