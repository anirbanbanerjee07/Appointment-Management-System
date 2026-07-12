FROM php:8.3-apache

# Disable event MPM and enable prefork MPM
RUN a2dismod mpm_event || true && \
    a2enmod mpm_prefork || true

RUN docker-php-ext-install mysqli pdo pdo_mysql

COPY . /var/www/html/

WORKDIR /var/www/html/

EXPOSE 80

CMD ["apache2-foreground"]
