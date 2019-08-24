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

WORKDIR /opt/app

WORKDIR /opt/app/wp-content/themes/theme_purdy

RUN composer install

WORKDIR /opt/app

RUN apk del git
RUN rm -rf kubernetes
RUN rm -rf /var/cache/apk/*

EXPOSE 80 443 9000

ENTRYPOINT ["start-httpd"]