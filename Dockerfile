FROM wordpress:6.7.2-php8.3-apache

RUN apt-get update && apt-get install -y wget unzip ssmtp \
    && wget https://github.com/composer/composer/releases/latest/download/composer.phar -O composer.phar \
    && chmod +x composer.phar \
    && mv composer.phar /usr/local/bin/composer

ENV PLUGINS="\
regenerate-thumbnails.3.1.6 \
cyr2lat.6.3.0 \
redirection.5.5.1 \
safe-svg.2.3.1 \
redis-cache \
wordpress-seo.24.6 \
wp-crontrol.1.18.0 \
wp-super-cache.2.0.0 \
wp-mail-smtp.4.4.0 \
query-monitor.3.17.2 \
duplicate-post.4.5 \
pretty-link.3.6.15 \
"

RUN for plugin in $PLUGINS; do \
      curl -o /tmp/${plugin}.zip https://downloads.wordpress.org/plugin/${plugin}.zip && \
      unzip -o /tmp/${plugin}.zip -d /var/www/html/wp-content/plugins/; \
    done

COPY dependencies/plugins.zip /tmp/plugins.zip

RUN unzip -o /tmp/plugins.zip -d /var/www/html/wp-content/plugins/

RUN chown -R www-data:www-data /var/www/html/wp-content/themes /var/www/html/wp-content/plugins