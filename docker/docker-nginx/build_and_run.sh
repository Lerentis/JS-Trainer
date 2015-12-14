#!/bin/bash
docker build -t js_trainer_nginx .
cd ..
cd ..
MYPWD=$(pwd)
docker run --name js_trainer_nginx -p 8080:80 -v $MYPWD:/usr/share/nginx/html --link js_trainer_mysql:js_trainer_nginx -d js_trainer_nginx