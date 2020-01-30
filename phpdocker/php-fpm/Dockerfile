FROM phpdockerio/php72-fpm:latest
WORKDIR "/application"

# Fix debconf warnings upon build
ARG DEBIAN_FRONTEND=noninteractive

# Install selected extensions and other stuff
RUN apt-get update \
    && apt-get -y --no-install-recommends install  php7.2-mysql php-redis php-xdebug php7.2-gd php-imagick php7.2-imap php7.2-intl php-mongodb php7.2-soap php7.2-tidy php7.2-xmlrpc php7.2-xsl php-yaml \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

# Install git
RUN apt-get update \
    && apt-get -y install git \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

RUN apt-get update -qq && apt-get install -y -qq curl supervisor nginx git wget

# install npm
RUN apt-get update -qq && apt-get install -y -qq npm
RUN rm -rf /usr/bin/node
RUN ln -s /usr/bin/nodejs /usr/bin/node

RUN apt-get install -y wget rsync

# Install wkhtmltox with deps
RUN wget https://github.com/wkhtmltopdf/wkhtmltopdf/releases/download/0.12.3/wkhtmltox-0.12.3_linux-generic-amd64.tar.xz && \
 tar xf wkhtmltox-0.12.3_linux-generic-amd64.tar.xz && \
 rsync -av wkhtmltox/* / && \
 chmod u+x /bin/wkhtmltoimage /bin/wkhtmltopdf && \
 rm wkhtmltox-0.12.3_linux-generic-amd64.tar.xz

RUN apt-get update -qq && apt-get install -y -qq libxrender1