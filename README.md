# Application Starter

First clone the repository
```bash
git clone https://github.com/lappet69/simple-login-ci4.git

cd simple-login-ci4

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



