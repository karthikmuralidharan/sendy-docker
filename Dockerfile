FROM php:7.2-apache

RUN apt-get update && apt-get install unzip

RUN docker-php-ext-install gettext mysqli
RUN a2enmod rewrite

ARG sendy_archive_url 
ADD ${sendy_archive_url} /tmp/sendy.zip
RUN mv /tmp /var/www/html

COPY config.php /var/www/html/includes/config.php

# Update the default apache site with the config we created.
COPY apache-config.conf /etc/apache2/sites-enabled/000-default.conf
