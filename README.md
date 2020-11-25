# Photo-Gallery-Stock

# Installation
- Download and Clone this repository
```
sdfds
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

# License
This library is under MIT license, please look at the LICENSE file
