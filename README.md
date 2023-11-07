
# Installation

`git clone https://github.com/nourpups/lazurit.uz.git`

`cd lazurit.uz`

`composer install`

#### Copy .env.example to .env

`php artisan key:generate`

## Make Storage files accessible
.env: `FILESYSTEM_DISK=public`

`php artisan storage:link`

## Set database settings

`DB_DATABASE=your_db`

`DB_USERNAME=your_username`

`DB_PASSWORD=your_password`

## Migrations & Seeders

`php artisan migrate`

`php artisan db:seed`

## Login credentials
### Admin credentials
- Name: Admin
- Phone: +998888000106
- Password: admina

## Final! Running on local server

`php artisan serve`

You can now access the server at [http://localhost:8000](http://localhost:8000)

