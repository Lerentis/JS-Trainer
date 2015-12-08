docker build -t js_trainer_phpbb .
MYPWD=$(pwd)
docker run -d -p 80:80 -p 443:443 -v $MYPWD/app/phpBB3 --name phpbb js_trainer_phpbb
