#!/bin/bash
docker build -t js_trainer_phpbb .
MYPWD=$(pwd)
docker run -d -p 80:80 -p 443:443 -v $MYPWD/app/phpBB3/:/var/www/html --name js_trainer_phpbb --link js_trainer_mysql:js_trainer_phpbb  js_trainer_phpbb