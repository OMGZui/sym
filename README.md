# Symfony tutorial

## deploy

```php
# install
composer install
# edit .env of mysql config
DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/db_name
# run migrate
php bin/console doctrine:migrations:migrate
```

## visit
```php
# require web-server
composer require symfony/web-server-bundle --dev
# run
php bin/console server:run
# visit in browser
http://localhost:8000/
```