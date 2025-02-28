# Usa una imagen oficial de PHP con Apache
FROM php:8.1-apache

# Copia los archivos del proyecto al contenedor
COPY . /var/www/html/

# Expone el puerto 80 para el servidor web
EXPOSE 80

# Comando de inicio
CMD ["apache2-foreground"]
