docker build -t js_trainer_phpbb .
run -d -p 80:80 -p 443:443 -v ./app/phpBB3 --name phpbb js_trainer_phpbb
