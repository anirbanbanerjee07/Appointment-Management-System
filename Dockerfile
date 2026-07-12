FROM php:8.3-apache

RUN apache2ctl -M

CMD ["apache2-foreground"]
