#!/bin/bash
docker build -t js_trainer_nginx .
cd ../../
MYPWD=$(pwd)
docker run --name js_trainer_nginx -v $MYPWD/website:/usr/share/nginx/html -v $MYPWD/phpBB3:/usr/share/phpBB3 --link js_trainer_mysql:js_trainer_nginx -e VIRTUAL_HOST=trainer.test.org -d js_trainer_nginx
