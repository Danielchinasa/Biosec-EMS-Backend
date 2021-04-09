<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## About Biosec Employee Management System

Biosec EMS Backend was build using [Laravel], a web application framework with expressive, elegant syntax.
Laravel provides API request by using Laravel Passport to communicat with the front end which is Build with React Js

## Installation

To install the project you can use the following command to clone this repo

```bash
git clone https://github.com/Danielchinasa/Biosec-EMS-Backend.git
```

Modify the .env file to suit the database name

```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:17hQqD6swEt0KWfoSzhU/8nNWvRhYwJ13QR9Bgqbi2I=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=biosec_db
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

```

When you have the .env with the database "biosec_db" connection set up you can run your migrations

```bash
php artisan migrate
```

Then run `php artisan passport:install`

## Import Database file into Localhost

Import the database file located in `database/biosec_db.sql` into your newly created database in `localhost/phpmyadmin`

## Run the serve

Set the Backend serve running by entering the bbelow code in terminal

```bash
php artisan serve
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
