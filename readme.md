# SBS 3.0 using Laravel + AdminLTE

Commands Used (Internet required):
```
composer create-project --prefer-dist laravel/laravel sbs3
composer require "acacha/admin-lte-template-laravel:2.*"

nano .env
# configure DB

php artisan migrate
adminlte-laravel --no-llum install

npm install
gulp

```