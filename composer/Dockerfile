FROM alpine:3.14

# installer les dépendances nécessaires à Composer
RUN apk update
RUN apk add --no-cache \
    php7 \
    php7-json \
    php7-dom \
    php7-mbstring \
    php7-openssl \
    php7-phar \
    php7-tokenizer \
    php7-xmlwriter \
    php7-xmlreader \
    php7-simplexml \
    php7-ctype \
    php7-zip \
    php7-curl \
    php7-session

# télécharger et installer Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php composer-setup.php --install-dir=/usr/local/bin --filename=composer && \
    php -r "unlink('composer-setup.php');"

# définir le répertoire de travail dans le conteneur
WORKDIR /composerV

# exécuter Composer
# CMD ["composer"]

#Permet de maintenir le container allumé
CMD tail -f /dev/null
