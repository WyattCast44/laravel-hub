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

```bash
cd /home/forge/usaf.xyz
git pull origin master
composer install --no-interaction --prefer-dist --optimize-autoloader

( flock -w 10 9 || exit 1
    echo 'Restarting FPM...'; sudo -S service php7.4-fpm reload ) 9>/tmp/fpmlock

if [ -f artisan ]; then
    composer dump-autoload
    php artisan storage:link
    php artisan optimize:clear
    php artisan migrate --force
    php artisan scout:flush "App\Package"
    php artisan scout:import "App\Package"
    php artisan optimize
fi
```