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
generate the hey pair for jwt
```bash
php bin/console lexik:jwt:generate-keypair
```

## start the project
```bash
symfony server:start
```


### Api documentation can be readed at the following link
http://127.0.0.1:8000/api/
Except for the get collection of news and get item news, the other apis needs an authorization token that can be created following the instruction at the next paragraph.
The token has to be passed to the api in the header as 'Bearer XXXXXX'

## login
api for the login (to create the Bearer toker)

```bash
curl --location --request POST 'http://127.0.0.1:8000/api/login_check' \
--header 'Content-Type: application/json' \
--data-raw '{
"username": "admin@reader.news",
"password": "adminPassword"
}'
```

### admin user

email: admin@reader.news
password: adminPassword
