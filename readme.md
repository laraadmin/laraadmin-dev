# LaraAdmin 0.1

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

LaraAdmin is a Open source CRM for quick-start Admin based applications with features like Advanced CRUD Generation, Schema Manager and Workflows.
##### Website: [laraadmin.com](http://laraadmin.com)

--------

### Features:
##### Module Manager:
You can create and edit Modules without touching code. It generate CRUD methods and views on the go from your schema, which can be customized. [Schema based migrations done]

##### Workflows:
Workflows governs the automation of business processes like Tasks, Events and many others according to set of procedural rules. (Cron Events) [Under Development]

##### User Management:
Easy user Management with features like Employees, Roles, Groups, Departments and Access Control. [Under Development]

--------

### Snapshots:

CRUD Model Listing:
![LaraAdmin CRUD Model Listing] (http://laraadmin.com/img/laraadmin-row-listing.jpg)
CRUD Model Add:
![LaraAdmin CRUD Model Add] (http://laraadmin.com/img/laraadmin-row-listing-add.jpg)
CRUD Model View:
![LaraAdmin CRUD Model View] (http://laraadmin.com/img/laraadmin-row-view.jpg)

### Installation:
```
git clone https://github.com/gdbhosale/laraadmin.git
cd laraadmin
composer install
cp .env.example .env
# Configure .env
nano .env
php artisan key:generate
php artisan migrate

# for less -> css
npm install
npm install forever -g
forever node_modules/gulp/bin/gulp.js watch
```

### Credits:
- Ganesh Khade https://github.com/moraya-re
- https://github.com/almasaeed2010/AdminLTE
- https://github.com/acacha/adminlte-laravel
- https://github.com/yajra/laravel-datatables
- https://github.com/creativeorange/gravatar

## Documentation

Documentation for the LaraAdmin can be found on the [LaraAdmin website](http://laraadmin.com/documentation).

## Contributing

Thank you for considering contributing to the LaraAdmin !!!

## Bugs, improvements & Security Vulnerabilities

If you discover a bug or security vulnerability within LaraAdmin, please send an e-mail to Ganesh Bhosale at ganesh@dwij.in. All requests will beaddressed promptly.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
