FROM php:8-apache

RUN apt update -y
RUN apt install -y libapache2-mod-security2

WORKDIR /var/www/html

COPY . .
RUN cp /etc/modsecurity/modsecurity.conf-recommended /etc/modsecurity/modsecurity.conf
RUN apt install git -y
RUN git clone https://github.com/SpiderLabs/owasp-modsecurity-crs.git
RUN cd owasp-modsecurity-crs && mv rules/ /etc/modsecurity && mv crs-setup.conf.example /etc/modsecurity/crs-setup.conf
COPY ./conf/security2.conf /etc/apache2/mods-enabled/security2.conf
COPY ./conf/modsecurity.conf /etc/modsecurity/modsecurity.conf


RUN chown -R www-data:www-data /var/www
RUN service apache2 restart