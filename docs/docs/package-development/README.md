---
title: Package Development
---

# {{ $frontmatter.title }}

Using [Laravel Blueprint](https://github.com/tjventurini/laravel-blueprint) for package development is easy. Just follow the very easy steps below and you are good to go.

## Installation

To start a new project based on this repository, you should do a fork of it. So for the following, you will have to replace the repository url `git@github.com:tjventurini/laravel-blueprint.git` with your own.

```
git clone --recursive git@github.com:tjventurini/laravel-blueprint.git
```

Now copy the environment file of the laradock setup.

```
cp laravel-blueprint/laradock/.env.example laravel-blueprint/laradock/.env
```

Then you should go ahead and update the laradock configuration. Make sure to update the `DATA_PATH_HOST` and `COMPOSE_PROJECT_NAME` environment variables. Also you will have to set the `UID`s and `GID`s that match your host systems. You can find them out by running `id -a`.

```
vim laravel-blueprint/laradock/.env
```

Next you will need to add the following volume to the `workspace` and `php-fpm` containers. You can add it in the regarding sections of your `laradock/docker-composer.yml` file.

```
    volumes:
        # ...
        - ../../packages:/var/packages
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

Next you will need to create a composer repository that you want to include. Go to your `packages` directory and create it there. Then you will have to update your `composer.json` in your package development instance. This could look like the following.

```
    "repositories": [
        {
            "type": "path",
            "url": "../packages/my-package"
        }
    ],
```

Then you can run the following to install it.

```
composer require your-name/your-package @dev
```

This should create a symlink for your package in the vendors folder.