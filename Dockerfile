FROM nginx:1.17-alpine

WORKDIR /var/www

COPY . /var/www

COPY proxy/default.conf /etc/nginx/conf.d/