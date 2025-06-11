FROM php:8.0.0-apache
ARG DEBIAN_FRONTEND=noninteractive

# Instala extensiones PHP necesarias
RUN docker-php-ext-install mysqli

# Instala cmatrix y otras dependencias
RUN apt update \
    && apt install -y libzip-dev zlib1g-dev cmatrix \
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-install zip

# Habilita mod_rewrite
RUN a2enmod rewrite
