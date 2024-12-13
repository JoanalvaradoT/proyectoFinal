# Usa una imagen oficial de PHP con soporte para Apache
FROM php:8.1-apache

# Instala extensiones necesarias para Laravel
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libzip-dev \
    zip \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Instala Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copia los archivos del proyecto al contenedor
COPY . /var/www/html

# Configura el directorio de trabajo
WORKDIR /var/www/html

# Establece permisos para almacenamiento y caché
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expone el puerto 80 para Apache
EXPOSE 80

# Comando para iniciar Apache
CMD ["apache2-foreground"]
