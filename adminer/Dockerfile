# Utilisez une image Alpine de base
FROM alpine:3.14

# Installez Nginx et PHP-FPM
RUN apk update && \
    apk add --no-cache \
    nginx \
    php7 \
    php7-fpm \
    php7-pdo \
    php7-pdo_mysql \
    php7-pgsql

# Copiez le fichier de configuration Nginx
COPY nginx.conf /etc/nginx/nginx.conf

# Toutes les commandes suivantes se feront dans le WORKDIR
WORKDIR /var/www/html/adminer

# Téléchargez Adminer et le renommez en index.php et installez-le dans le répertoire de travail /var/www/html/adminer
RUN wget https://github.com/vrana/adminer/releases/download/v4.8.1/adminer-4.8.1.php -O index.php

# Exposez le port 8080 pour accéder à Adminer via un navigateur
EXPOSE 8080

RUN apk add --no-cache php7-session

# Démarrez les services Nginx et PHP-FPM
# daemon off afin de garder le conteneur en cours d'exécution.
CMD php-fpm7 && nginx -g "daemon off;"
