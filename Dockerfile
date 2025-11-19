# Usamos la imagen oficial de PHP con servidor web
FROM php:8.2-cli

# Copiamos los archivos de tu proyecto
WORKDIR /app
COPY . /app

# Exponemos el puerto 10000
EXPOSE 10000

# Iniciamos el servidor PHP
CMD ["php", "-S", "0.0.0.0:10000"]
