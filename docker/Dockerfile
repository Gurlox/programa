FROM php:7.3.2-fpm

RUN docker-php-ext-install pdo_mysql

RUN apt-get update \
	&& apt-get install -y \
		curl \
		git

# Composer
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer

ENV PATH /root/.composer/vendor/bin:$PATH

RUN ln -s /root/.composer/vendor/bin/phpunit /usr/bin/phpunit