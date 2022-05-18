# U2t system with laravel framework
 ระบบบริหารจัดการข้อมูล U2t 
 =>login and register  <br />
 =>ระบบจัดการสมาชิก  <br />
 =>ระบบติดตามงาน  <br />
 =>ระบบกรอกฟอร์มข้อมูลต่างๆ  <br />
 => ฯลฯ  <br />
  

## get it up and running.

After you clone this project, do the following:

```bash
# go into the project
cd  root project
# create a .env file
cp .env.example .env
# install composer dependencies
composer update
# install npm dependencies
npm install
# generate a key for your application
php artisan key:generate

# add the database connection config to your .env file
DB_CONNECTION=mysql
DB_DATABASE=your database
DB_USERNAME=your table name
DB_PASSWORD=your password
# run the migration files to generate the schema
php artisan migrate

# run webpack and watch for changes
npm run watch

# run serve
php artisan serve

Good Luck :)
