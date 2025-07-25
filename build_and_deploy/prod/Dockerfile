FROM wordpress:6.8.1-php8.4-apache

RUN sed -i 's/80/8080/g' /etc/apache2/ports.conf && \
    sed -i 's/:80/:8080/g' /etc/apache2/sites-enabled/000-default.conf && \
    groupadd -g 993 docker && \
    useradd -u 3002 -g docker -s /bin/bash -m prod