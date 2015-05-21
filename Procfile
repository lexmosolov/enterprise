web: vendor/bin/heroku-php-apache2 public/
worker: php artisan migrate:refresh --seed
worker: php artisan route:cache
worker: php artisan optimize