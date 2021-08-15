#!/bin/sh

php artisan down

sudo git pull origin master

sudo npm update

sudo npm run dev

php artisan up

sudo systemctl restart nginx