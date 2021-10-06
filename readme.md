# news reades

Prerequisites:

- php
- composer
- docker
- symfony CLI


## set up the project

start docker for the db
``` bash
docker-compose up -d
```
install composer dependencies
```bash
composer install
```
do the migrations
```bash
php bin/console doctrine:migrations:migrate
```
load data fixtures (user & news)
```bash
php bin/console doctrine:fixtures:load
```

## start the project
```bash
symfony server:start
```


### Api documentation can be readed at the following link
http://127.0.0.1:8000/api/

## login

### admin user

email: admin@reader.news
password: adminPassword
