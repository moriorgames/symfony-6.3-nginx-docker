test:
	- docker-compose -p sf63_test -f docker-compose-test.yml build
	- docker-compose -p sf63_test -f docker-compose-test.yml up -d
	docker exec -ti -e XDEBUG_MODE=coverage app_test php phars/phpunit.phar tests/Unit --coverage-html coverage
