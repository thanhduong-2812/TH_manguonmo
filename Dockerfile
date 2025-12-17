FROM php:8.2-apache
# Cài đặt thư viện để PHP kết nối được với MySQL trong Docker
RUN docker-php-ext-install mysqli
COPY . /var/www/html/
EXPOSE 80