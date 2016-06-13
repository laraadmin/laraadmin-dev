# LaraAdmin 0.1

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
- https://github.com/almasaeed2010/AdminLTE
- https://github.com/acacha/adminlte-laravel
- https://github.com/yajra/laravel-datatables
- https://github.com/creativeorange/gravatar
