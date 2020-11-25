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
# Packages Included
- laravel fortify
- laravel ui

# Features
- Home page
- Custom Error Page 404
- Authentication (registration, login, logout, password reset, mail confirmation, throttle)
- Users roles : administrator (all access), redactor (create and edit post, upload and use medias in personnal directory), and user (create comment in blog)
- Blog with comments
- Search in posts
- Tags on posts
- Contact us page
- Admin dashboard with new messages, users, posts and comments
- Users admin (roles filter, show, edit, delete, create)
- Messages admin
- Posts admin (list with dynamic order, show, edit, delete, create)
- Medias gestion
- Localisation
# License
This library is under MIT license, please look at the LICENSE file
