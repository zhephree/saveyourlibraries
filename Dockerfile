FROM php:7.3.24-apache-stretch

COPY . /var/www/html

RUN a2enmod rewrite

EXPOSE 80

CMD ["apache2-foreground"]
