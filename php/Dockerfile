FROM php:7.1.5-apache
 
RUN apt-get update
 
RUN apt-get install -y --no-install-recommends \
        # for gd
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libwebp-dev \
        libxpm-dev \
        # for ImageMagick
        libmagickwand-dev \
        # for intl
        libicu-dev \
        # from zip
        zlib1g-dev && \
    pecl install imagick && \
    docker-php-ext-enable imagick && \
    docker-php-ext-install bcmath calendar exif gettext intl mbstring mysqli pdo pdo_mysql zip && \
    docker-php-ext-install -j$(nproc) iconv && \
    docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ && \
    docker-php-ext-install -j$(nproc) gd && \
    rm -rf /var/lib/apt/lists/* && \
    apt-get clean && \
    # enable mod_rewrite
    a2enmod rewrite && \
    # install composer
    cd '/' && \
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"&&  \
    php composer-setup.php && \
    php -r "unlink('composer-setup.php');" && \
    mv composer.phar /usr/local/bin/composer
