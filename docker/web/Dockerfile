# WebサーバのDocker Image
FROM php:8.4.2-apache

ENV TZ Asia/Tokyo

# Apacheドキュメントルートの設定
# 指定したディレクトリのhtdocsをブラウザから見れるように設定
ENV APACHE_DOCUMENT_ROOT /var/www/app/htdocs

# ディレクトリの作成
# RUN mkdir /udemy
# WORKDIR /udemy

# php.iniを指定の場所にコピー
COPY ./php.ini /usr/local/etc/php/conf.d/php.ini

# タイムゾーン
RUN ln -snf /usr/share/zoneinfo/${TZ} /etc/localtime \
  && echo ${TZ} > /etc/timezone

# ソフトウェアのインストール
RUN apt-get update \
  && apt-get install -y \
    cron \
    vim \
  && docker-php-ext-install pdo_mysql

# Apacheドキュメントルートの設定を変更するための記述
RUN sed -i \
  's|DocumentRoot /var/www/html|DocumentRoot ${APACHE_DOCUMENT_ROOT}|' \
  /etc/apache2/sites-available/000-default.conf
RUN sed -i \
  's|<Directory /var/www/>|<Directory ${APACHE_DOCUMENT_ROOT}>|' \
  /etc/apache2/apache2.conf
