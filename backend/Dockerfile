# استفاده از image پایه PHP با Apache
FROM php:8.1-apache

# کپی کردن فایل‌های پروژه به container
COPY . /var/www/html/

# نصب وابستگی‌های Composer (اگر نیاز باشد)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-dev --optimize-autoloader

# تنظیم مجوزها
RUN chown -R www-data:www-data /var/www/html

# پورت مورد استفاده
EXPOSE 80

# دستور اجرای Apache
CMD ["apache2-foreground"]