FROM php:8.2-fpm-alpine

ARG BUILD_GID=1000
ARG BUILD_UID=1000

# Install packages
RUN apk --update --no-cache add wget \
    curl \
    git \
    grep \
    build-base \
    libmcrypt-dev \
    libxml2-dev \
    imagemagick-dev \
    pcre-dev \
    libtool \
    make \
    autoconf \
    g++ \
    cyrus-sasl-dev \
    libgsasl-dev \
    supervisor \
    nano \
    libpng-dev \
    libzip-dev \
    nodejs \
    npm \
    openldap-dev \
    shadow \
    patch \
    php-sockets \
    openssl-dev

ADD https://raw.githubusercontent.com/mlocati/docker-php-extension-installer/master/install-php-extensions /usr/local/bin/
RUN groupdel dialout
RUN groupmod -g ${BUILD_GID} www-data
RUN usermod -s /bin/sh -g ${BUILD_GID} -u ${BUILD_UID} www-data

# Install php modules
ADD https://raw.githubusercontent.com/mlocati/docker-php-extension-installer/master/install-php-extensions /usr/local/bin/

RUN chmod uga+x /usr/local/bin/install-php-extensions && sync && \
      install-php-extensions sockets xdebug imagick mcrypt redis ldap pdo_mysql opcache gd zip soap intl pdo


# Install composer
COPY --from=composer /usr/bin/composer /usr/bin/composer
RUN composer global require hirak/prestissimo --no-plugins --no-scripts --ignore-platform-reqs

# Install Yarn
RUN npm install -g yarn

# Set the locale
ENV MUSL_LOCALE_DEPS cmake make musl-dev gcc gettext-dev libintl
ENV MUSL_LOCPATH /usr/share/i18n/locales/musl
RUN apk add --no-cache \
    $MUSL_LOCALE_DEPS \
    && wget https://gitlab.com/rilian-la-te/musl-locales/-/archive/master/musl-locales-master.zip \
    && unzip musl-locales-master.zip \
      && cd musl-locales-master \
      && cmake -DLOCALE_PROFILE=OFF -D CMAKE_INSTALL_PREFIX:PATH=/usr . && make && make install \
      && cd .. && rm -r musl-locales-master
ENV LANG=nl_NL.UTF-8 \
    LANGUAGE=nl_NL.UTF-8 \
    LC_TIME=nl_NL.UTF-8 \
    LC_ALL=nl_NL.UTF-8

# Install PHP security check
RUN wget -O local-php-security-checker https://github.com/fabpot/local-php-security-checker/releases/download/v1.0.0/local-php-security-checker_1.0.0_linux_amd64
RUN chmod +x local-php-security-checker && mv local-php-security-checker /usr/local/bin/

# Cleanup
RUN rm -R /var/cache/apk \
 && apk del --purge autoconf g++ make

# Copy configuration
# COPY ./docker/php/supervisord.conf /etc/supervisord.conf
COPY ./docker/php/php.ini /usr/local/etc/php/php.ini

# Copy files to working directory
RUN mkdir -p /var/www/html && chown -R www-data:www-data /var/www/html

USER www-data

EXPOSE 9000
CMD ["php-fpm"]
