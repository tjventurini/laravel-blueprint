---
title: Package Development
---

# {{ $frontmatter.title }}

Using [Laravel Blueprint](https://github.com/tjventurini/laravel-blueprint) for package development is easy. Just follow the very easy steps below and you are good to go.

## Installation

Follow the steps shown in the [quickstart guide](/guide/) or in the [docs](/docs/) to install the laravel-blueprint.

## Add Volume for Packages

You will need to add the following volume to the `workspace` and `php-fpm` containers. You can add it in the regarding sections of your `laradock/docker-composer.yml` file.

```
    volumes:
        # ...
        - ../../packages:/var/packages
```

Now you will have to rebuild the containers.

```
make build
```

## Adding your Development Package

You will need to create a composer repository that you want to include. Go to your `packages` directory and create it there. Then you will have to update your `composer.json` in your package development instance. This could look like the following.

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

## IDE Configuration

Remember that you should include another folder to the project/workspace of your IDE. I suggest that you add your vendor name directory from the vendors folder so your _inteli_ services don't make your IDE light up red all over the place 😉