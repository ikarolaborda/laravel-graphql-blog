.DEFAULT_GOAL := help

help:
	@echo "Please choose what you want to do: \n" \
	" make dup: Start the Docker containers \n" \
	" make ddw: Stop the Docker containers \n" \
	" make drs: Restart the Docker containers \n" \
	" make dci: Install dependencies inside the container \n" \
	" make dcu: Update dependencies inside the container \n" \
	" make mysql: Run the interactive shell in the MySQL container. \n" \
	" make php: Run the interactive shell in the PHP container. \n" \
	" make mig: Run migrations and seeders manually. \n"

build:
	touch database/database.sqlite;
	cp .env.example .env;
	export COMPOSE_FILE=docker-compose.yml; docker-compose -f docker-compose.yml --env-file .env up -d --build

dup:
	export COMPOSE_FILE=docker-compose.yml; docker-compose up -d

ddw:
	export COMPOSE_FILE=docker-compose.yml; docker-compose down --volumes

drs:
	export COMPOSE_FILE=docker-compose.yml; docker-compose down --volumes && docker-compose up -d

dci:
	docker exec -it php composer install && sudo chown -R $(USER):$(shell id -g) vendor/

dcu:
	docker exec -it php composer update && sudo chown -R $(USER):$(shell id -g) vendor/

mysql:
	docker exec -it database bash

php:
	docker exec -it php bash

mig:
	docker exec -it php php artisan migrate:fresh --seed

test:
	docker exec -it php php artisan test
