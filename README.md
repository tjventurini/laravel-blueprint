# Laravel Blueprint 🚀

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
git clone --recursive git@github.com:tjventurini/laravel-blueprint.git
```

Then you should go ahead and update the laradock configuration in your project in `.env.docker.example`. Make sure to update the `DATA_PATH_HOST` and `COMPOSE_PROJECT_NAME` environment variables. Also you will have to set the `UID`s and `GID`s that match your host systems. You can find them out by running `id -a`.

Also make sure to update the `Makefile` of this project. You might need to update the `CONTAINERS` variable at the top of the file to specify the list of containers that you want to start for your project.

```
########################################
# variables
CONTAINERS=nginx php-fpm mysql workspace
```

Now you are ready to execute the setup from the make file.

```
make init
```

This will build and start the containers, and execute `composer install` in the `workspace` container. So basically you are done 😁

## Upgrade

To upgrade your project against the laravel-blueprint, you can run the following command.

```
make upgrade
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