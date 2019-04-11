# Laravel-CMS

## Description  
This CMS is using Laravel that was made by basic system.

### function list  
- Login
- User Register
- CRUD
- File Upload
- Contact

## Install  
```
$ git clone https://github.com/Restoration/Laravel-CMS.git
$ cd Laravel-CMS/app
$ cp env.example .env
$ vim .env # Refer bellow setting for MySQL connect
$ cd ../
$ docker-compose up
# Open new terminal
$ docker-compose exec app bash 
$ php artisan migrate
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
[MIT](https://github.com/Restoration/Laravel-CMS/blob/master/LICENSE)

## Author  
RyotArch(http://www.developer-ryota.com)  