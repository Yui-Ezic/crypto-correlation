init: docker-down-clear \
	docker-pull docker-build docker-up\
	app-init
up: docker-up
down: docker-down
restart: down up
calculate: app-calculate

docker-up:
	docker-compose up -d

docker-down:
	docker-compose down --remove-orphans

docker-down-clear:
	docker-compose down -v --remove-orphans

docker-pull:
	docker-compose pull --include-deps

docker-build:
	docker-compose build

app-init: composer-install

composer-install:
	docker-compose run --rm php-cli composer install

app-calculate:
	docker-compose run --rm php-cli composer app calculate