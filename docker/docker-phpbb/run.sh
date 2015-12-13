#!/bin/bash

APPLICATION_HOME="/var/www/html"

cd $APPLICATION_HOME
for files in config.php cache files store images/avatars/upload/; \
do chmod 777 $files; done

cd /var/www
chown -R www-data:www-data html

exec supervisord -n
