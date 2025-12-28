FROM php:5.6-apache
# Cài đặt extension mysqli cho PHP 5.6
RUN docker-php-ext-install mysqli
# Copy mã nguồn vào
COPY . /var/www/html/
EXPOSE 80