docker build -t nginx-js-trainer .
cd ..
cd ..
MYPWD=$(pwd)
docker run --name nginx_trainer -p 8080:80 -v $MYPWD:/usr/share/nginx/html -d nginx-js-trainer
