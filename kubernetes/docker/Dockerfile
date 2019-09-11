FROM base

MAINTAINER Leonardo Monge García <leonardo.monge@creativedrive.com>

ARG BUILD_ENV
ENV BUILD_ENV=$BUILD_ENV
ENV APP_ENV=$BUILD_ENV

# Install misc dependencies

RUN echo "ipv6" >> /etc/modules

RUN apk --update --no-cache add git && rm -rf /var/cache/apk/*

COPY ./kubernetes/docker/utils/start-httpd /usr/local/bin/start-httpd

RUN chmod +x /usr/local/bin/start-httpd

COPY . /opt/app

WORKDIR /opt/app/wp-content/themes/theme_purdy

RUN composer install

WORKDIR /opt/app

RUN rm -rf /var/www/localhost/htdocs && ln -s /opt/app /var/www/localhost/htdocs

# Addind the wp-config

RUN cp "wp-config.${BUILD_ENV}.php" config_template &&\
    rm wp-config.* &&\
    cp config_template wp-config.php

# Setup htaccess

RUN cp ".htaccess.${BUILD_ENV}" .htaccess

RUN apk del git &&  rm -rf kubernetes && rm -rf /var/cache/apk/*

EXPOSE 80 443 9000

ENTRYPOINT ["start-httpd"]