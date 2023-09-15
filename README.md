# Application Starter

First clone the repository
```bash
git clone https://github.com/lappet69/php-ci-4_crud-my-sql.git

cd php-ci-4_crud-my-sql

```
## Setup

Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.

## DB Configuration
make sure your database configuration in .env is correct

```bash
php spark migrate

php spark db:seed User
```

## Run application

```bash
php spark serve
```


## Server Requirements

PHP version 7.4 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
