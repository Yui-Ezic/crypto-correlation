FROM php:7.4-cli

# Unzip tool (for composer)
RUN apt-get update && apt-get install -y unzip

# Install Composer
ENV COMPOSER_ALLOW_SUPERUSER 1
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer --quiet

WORKDIR /app