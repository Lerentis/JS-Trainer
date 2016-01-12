docker build -t js_trainer_reverse_proxy .
docker run -p 80:80 -p 443:443 -e DEFAULT_HOST=test.org -v /var/run/docker.sock:/tmp/docker.sock:ro --name js_trainer_reverse_proxy -d js_trainer_reverse_proxy
