#!/bin/bash
docker build -t js_trainer_mysql .
docker run --name js_trainer_mysql -e MYSQL_ROOT_PASSWORD="V5k6hBk~5:<s7q" --link 427b2c6b1a51:mysql -p 3306:3306 -d js_trainer_mysql
