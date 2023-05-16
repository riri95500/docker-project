# Utilisez l'image de base Alpine 3.14
FROM alpine:3.14

# Mettre à jour les paquets existants
RUN apk update

# Installer PHP et les extensions nécessaires
RUN apk add php7 \
    php7-fpm \
    php7-json \
    php7-iconv \
    php7-openssl \
    php7-mbstring \
    php7-phar \
    php7-dom \
    php7-pdo \
    php7-pdo_mysql \
    php7-pdo_pgsql \
    php7-pgsql \
    php7-tokenizer \
    php7-xmlwriter \
    php7-xmlreader \
    php7-ctype \
    php7-session \
    php7-simplexml \
    php7-xml \
    php7-intl \
    php7-curl

RUN echo "extension=pdo_pgsql.so" > /etc/php7/conf.d/pdo_pgsql.ini \
    && echo "extension=pgsql.so" > /etc/php7/conf.d/pgsql.ini

# Installer Composer
RUN apk add curl
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Définir le répertoire de travail dans le conteneur
WORKDIR /var/www

# Créer une nouvelle application Symfony
RUN composer create-project symfony/website-skeleton .

# Exposer le port 8000 pour accéder à l'application
EXPOSE 8000

# Définir la commande de démarrage de l'application Symfony
CMD php -S 0.0.0.0:8000 -t public
