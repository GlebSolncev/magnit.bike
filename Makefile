help:
	@echo "-- list commands --"
	@echo "cli 	- open bash to php-fpm container"
	@echo "up 	- start env working"
	@echo "build	- Build containers"
	@echo "down	- Stop and remove containers"

cli:
	@docker  exec -it app /bin/bash

build:
	@docker-compose build --no-cache

up:
	@docker-compose up -d

down:
	@docker-compose down