FROM trafex/alpine-nginx-php7
COPY --chown=nobody ./ /var/www/html/
USER root
RUN apk --no-cache add php7-tokenizer
RUN sed -i 's/root\ \/var\/www\/html;/root\ \/var\/www\/html\/public;/g' /etc/nginx/nginx.conf
USER nobody
