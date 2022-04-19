# clientePHP
Cliente en PHP que usa la clase [SoapClient](https://www.php.net/manual/es/class.soapclient.php) para consumir un WS-SOAP en Spring Boot.
Para correr PHP se usa la imagen [php:apache](https://hub.docker.com/layers/php/library/php/apache/images/sha256-3a3ec64c3ac9c7aa6af79b0e167fefb4057d6dbf30d0d97fb9dc1e321038017c?context=explore) pero debido a que no tiene habilitado el soporte para soap se incluye el módulo compilado en dicha versión.

El módulo soap.so se generó empleando el script [docker-php-extension-installer](https://github.com/mlocati/docker-php-extension-installer), ejecutando:
<pre>
curl -sSLf \
        -o /usr/local/bin/install-php-extensions \
        https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions && \
    chmod +x /usr/local/bin/install-php-extensions && \
    install-php-extensions <b>php-soap</b>
</pre>

## Ejecutar el cliente
docker-compose -f php-soap.yml up
> Nota: debes reemplazar la dirección del host del servicio web dentro del archivo funcionsaludar.php

## Ejecutar el servicio web
docker-compose -f ws-soap.yml up
