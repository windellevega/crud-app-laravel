## Setup and Configuration


• Clone this repository
```
git clone https://github.com/windellevega/crud-app-laravel.git
```

• Install different packages using composer
```
composer install
```

• Edit `.env.example` file place necessary database credentials and save it as `.env`

• Generate Key (Keys will be automatically generated on `.env` file upon creating new Laravel project but you need to generate it manually if cloned from a repository)
```
php artisan key:generate
```

•Create an empty database in MySQL (make sure that the database name matches the one you've placed on your `.env` file)

• Migrate the tables
```
php artisan migrate
```

• Seed your database with sample data to start of
```
php artisan db:seed
```

• Run your application
```
php artisan serve
```