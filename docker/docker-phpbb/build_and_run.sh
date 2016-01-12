#!/bin/bash
docker build -t js_trainer_phpbb .
cd ../../phpBB3
MYPWD=$(pwd)
docker run -d -v $MYPWD:/var/www/html --name js_trainer_phpbb --link js_trainer_mysql:js_trainer_phpbb -e VIRTUAL_HOST=forum.test.org -d js_trainer_phpbb
