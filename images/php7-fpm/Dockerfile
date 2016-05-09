FROM php:7.0.4-fpm

# compile + install xdebug
RUN curl -SL "https://xdebug.org/files/xdebug-2.4.0.tgz" -o xdebug.tar.xz \
	&& mkdir -p /usr/src/xdebug \
	&& tar -xof xdebug.tar.xz -C /usr/src/xdebug --strip-components=1 \
	&& rm xdebug.tar.xz \
	&& cd /usr/src/xdebug \
	&& phpize \
	&& ./configure \
	&& make -j"$(nproc)" \
	&& cp modules/xdebug.so "$(php -r 'echo ini_get("extension_dir");')"

RUN apt-get update && apt-get install -y libmcrypt-dev

# Install modules
RUN docker-php-ext-install mcrypt mbstring pdo pdo_mysql mysqli

CMD ["php-fpm"]