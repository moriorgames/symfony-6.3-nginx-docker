# Symfony 6.3 with nginx php 8.1 and docker

This is an experimental project aimed at exploring Symfony, Nginx, PHP 8.1, and some additional vendors for providing API documentation.

## Requirements
- Docker

## Getting Started

Follow the steps below to set up the project locally:

1. Clone the repository: `git clone <repository-url>`

2. Build and run the Docker containers:
   - `docker-compose build`
   - `docker-compose up -d`
   - This command will build the necessary Docker images and start the containers for PHP, Nginx, and MariaDB.

3. Access the application:
   - Open your browser and go to `http://localhost:8080`.
   - You should see the application running.

## Executing tests

```
$ make test  
```

## Project Structure

Provide a brief description of the project structure and important files/directories here.

## API Documentation

Explain the purpose of the API documentation and mention the vendors or tools used for generating it.

## Tooling

This utility command can be used to print file contents for exploration:

```
$ find . -type f -exec printf '### START OF FILE ###\n%s\n' {} \; -exec cat {} \; -exec printf '### END OF FILE ###\n' \;
```

## Testing environment

```
$ docker-compose -f docker-compose-test.yml build
$ docker-compose -f docker-compose-test.yml down
$ docker-compose -f docker-compose-test.yml up -d
$ docker-compose -f docker-compose-test.yml exec app-test bash  
app# php bin/console --env=test doctrine:schema:create
app# ./bin/phpunit tests/Integration
```
