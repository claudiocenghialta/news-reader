# news reades

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

## login

### admin user

email: admin@reader.news
password: adminPassword
