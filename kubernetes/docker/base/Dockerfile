FROM alpine:3.9

MAINTAINER Leonardo Monge García <leonardo.monge@creativedrive.com>

#Env Vars

ARG BUILD_ENV
ENV BUILD_ENV=$BUILD_ENV

# Install misc dependencies

RUN apk add

# Setup PHP

RUN apk add --update \
    --repository http://dl-cdn.alpinelinux.org/alpine/edge/main \
    --repository http://dl-cdn.alpinelinux.org/alpine/edge/community

RUN apk --update --no-cache add \
        php7-dev \
        php7-bcmath \
        php7-dom \
        php7-ctype \
        php7-curl \
        php7-fileinfo \
        php7-fpm \
        php7-gd \
        php7-mbstring \
        php7-intl \
        php7-json \
        php7-mcrypt \
        php7-opcache \
        php7-openssl \
        php7-pdo \
        php7-pdo_mysql \
        php7-pdo_pgsql \
        php7-pdo_sqlite \
        php7-phar \
        php7-posix \
        php7-session \
        php7-simplexml \
        php7-soap \
        php7-tokenizer \
        php7-xml \
        php7-xmlwriter \
	    php7-zip \
	    php7-zlib \
        grep \
        mysql-client \
    && rm -rf /var/cache/apk/*


COPY ./docker/utils/php.ini /etc/php7/conf.d/50-setting.ini
COPY ./docker/utils/php-fpm.conf /etc/php7/php-fpm.conf

# Setup Apache

RUN apk --update add apache2 php7-apache2 curl \
    && rm -f /var/cache/apk/* \
    && curl -sS https://getcomposer.org/installer | php7 -- --install-dir=/usr/local/bin --filename=composer \
    && mkdir -p /opt/utils

COPY ./docker/utils/httpd.conf /etc/apache2/httpd.conf

# Clean the image

RUN rm -rf /var/cache/apk/*