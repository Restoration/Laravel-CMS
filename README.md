# Laravel-Boilerplate

## Description  
This CMS is using Laravel that was made by basic system.

### function list  
- Login
- User Register
- CRUD
- File Upload
- Contact
- Category

## Install  
Build Laravel app
```
$ git clone https://github.com/Restoration/Laravel-Boilerplate.git
$ cd Laravel-Boilerplate/app
$ cp .env.example .env
$ vim .env # Refer bellow setting for MySQL connect
$ php artisan key:generate
$ cd ../
$ docker-compose up
```

Please open new terminal.
```
$ docker-compose exec app bash 
$ cd app
$ php artisan migrate
$ php artisan db:seed
```

.env Setting to connect MySQL
```
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=sample
DB_USERNAME=user
DB_PASSWORD=password
```

## License  
[MIT](https://github.com/Restoration/Laravel-Boilerplate/blob/master/LICENSE)

## Author  
RyotArch(https://www.developer-ryota.com)  
