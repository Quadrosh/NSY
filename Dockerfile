FROM yiisoftware/yii2-php:7.1-apache-18.12.0

COPY apache2/nashe-schastye.ru.conf /etc/apache2/sites-enabled/
# COPY apache2/cp.nashe-schastye.ru.conf /etc/apache2/sites-enabled/

COPY . .

# RUN apt-get update && apt-get install -y vim

RUN mkdir /var/www/tmp
RUN mkdir /var/www/tmp/data/
RUN rm /etc/apache2/sites-enabled/000-default.conf