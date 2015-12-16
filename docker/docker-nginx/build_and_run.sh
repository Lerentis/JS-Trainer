#!/bin/bash
docker build -t js_trainer_nginx .
cd ../../
MYPWD=$(pwd)
docker run --name js_trainer_nginx -p 8080:80 -v $MYPWD/website:/usr/share/nginx/html -v $MYPWD/phpBB3:/usr/share/phpBB3 --link js_trainer_mysql:js_trainer_nginx -d js_trainer_nginx