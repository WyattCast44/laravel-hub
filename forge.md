```bash
composer dump-autoload
php artisan storage:link
php artisan optimize:clear
php artisan migrate --force
php artisan telescope:publish
php artisan scout:flush "App\Package"
php artisan scout:import "App\Package"
php artisan optimize
```