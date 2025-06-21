FROM dwchiang/nginx-php-fpm:8.1.27-fpm-alpine3.18-nginx-1.25.4

WORKDIR /var/www/html

COPY --chown=www-data:www-data --chmod=755 src/myapp /var/www/html

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN chmod +x /usr/local/bin/install-php-extensions && sync && \
    install-php-extensions opcache pgsql pdo_pgsql redis

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

RUN apk --no-cache add zip \
    git \
    less \
    vim \
    unzip \
    curl \
    bash \
    yarn \
    make

COPY nginx/conf.d/app.conf /etc/nginx/conf.d/default.conf

RUN sed -i -e "s/bin\/ash/bin\/bash/" /etc/passwd

USER www-data

RUN composer install -o

USER root
