# Photo-Gallery-Stock

# Installation
- Download and Clone this repository
```
https://github.com/choirul32/Photo-Gallery-Stock.git
```
- Create a new database
- Copy and rename file ```.env.example``` to ```.env```, adn edit database configurations (host, username, password etc)
- run command in project directory
```
composer instlal
php artisan key:generate
php artisan migrate --seed
php artisan storage:link
```
- launch server
```
php artisan serve
```
# Packages Included
- laravel fortify
- laravel ui

# Features
- Gallery page
- Authentication (registration, login, logout, password reset)

# License
This library is under MIT license, please look at the LICENSE file

# Test
To test application the database is seeding with users
- email : muklisin@gmail.com
- password : 12345678
