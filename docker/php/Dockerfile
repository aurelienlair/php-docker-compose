FROM php:7.2-fpm

RUN apt-get update && apt-get install -y \
    git \
    unzip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer --version

# Set timezone
RUN rm /etc/localtime
RUN ln -s /usr/share/zoneinfo/Europe/Rome /etc/localtime
RUN "date"

ADD entrypoint.sh /var/local/entrypoint.sh

RUN chmod +x /var/local/entrypoint.sh

WORKDIR /www
