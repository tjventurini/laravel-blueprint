# Laravel Blueprint

This laravel blueprint intends to speed up your development.

## Features

This laravel blueprint has the following features / packages included.

- [Laradock](https://laradock.io)
- [Lighthouse](https://lighthouse-php.com) for GraphQL
- [Orchid](https://orchid.software/) as admin panel
- [Telescope](https://laravel.com/docs/telescope) for debugging
- xDebug to debug your Laravel application

## Installation

To start a new project based on this repository, you should do a fork of it. So for the following, you will have to replace the repository url `git@github.com:tjventurini/laravel-blueprint.git` with your own.

To install this blueprint you need to clone this repository.

```
git clone git@github.com:tjventurini/laravel-blueprint.git
```

Now copy the environment file of the laradock setup.

```
cp laravel-blueprint/laradock/.env.example laravel-blueprint/laradock/.env
```

Then you should go ahead and update the laradock configuration. Make sure to update the `DATA_PATH_HOST` and `COMPOSE_PROJECT_NAME` environment variables. Also you will have to set the `UID`s and `GID`s that match your host systems. You can find them out by running `id -a`.

```
vim laravel-blueprint/laradock/.env
```

Now it is time to boot up laradock. Your first boot can take some time since the docker containers need to be build.

```
cd laradock
docker-composer -d nginx php-fpm mysql workspace
```

Now you are ready to login to the laravel container using `zsh`.

```
docker-compose exec --user=laradock workspace zsh
```

This will directly bring you to the location of your laravel application. Now it's time to install the composer dependencies and to generate the application key. Composer is set to do this automatically after installation, so all what's left to do is to run the following well know command.

```
composer install
```

The `composer install` command is set up to run the setup for the whole application. If you want to run it manually agian, then you can either run `composer install` again or run the following artisan command.

```
php artisan app:install --refresh --seed --demo
```

## Upgrade

To upgrade your forked project you have to run the following commands from within your applications root.

```
# add parent repository as blueprint
git remote add blueprint git@github.com:tjventurini/laravel-blueprint.git

# fetch branches
git fetch blueprint

# checkout your own main branch (probably master)
git checkout main

# merge in changes
git merge blueprint/main
# you can also use rebase here
```

## Usage

### Development URL

If you want to access your local project under a specific url you can add an entry like the following to your hosts file.

```
127.0.0.1 laravel-blueprint.local
```

### Login to Dashboard

There is a default admin user available that you can use to login to the dashboard.

```
URL: http://laravel-blueprint.local/admin/login
USER: admin@admin.com
PASSWORD: password
```

This user has the admin user role applied to it and all permissions available per default.

### Run Setup

The `composer install` command is set up to run the setup for the whole application. If you want to run it manually agian, then you can either run `composer install` again or run the following artisan command.

```
php artisan app:install --refresh --seed --demo
```

## Documentation

Further documentation of this repository can be found in the docs.

- [Documentation](https://tjventurini.github.io/laravel-blueprint/)