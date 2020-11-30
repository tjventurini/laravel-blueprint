---
title: Exception Handling
---

# {{ $frontmatter.title }}

## Sentry

The [Laravel Blueprint](https://github.com/tjventurini/laravel-blueprint) comes with a [Sentry](https://sentry.io) setup so you just have to enable it using the following command. It creates (config/sentry.php) and adds the DSN to your .env file. _You can get your DNS key to publish during the creation of a project in sentry_.

```
php artisan sentry:publish --dsn=https://examplePublicKey@o0.ingest.sentry.io/0
```

If you want to know more, check out the [documentation](https://docs.sentry.io/) and the setup [laravel quick start guide for sentry](https://docs.sentry.io/platforms/php/guides/laravel/).

## GraphQL

The [Laravel Blueprint](https://github.com/tjventurini/laravel-blueprint) comes with the [tjventurini/graphql-exceptions](https://github.com/tjventurini/graphql-exceptions) package, so you should make use of them in your graphql queries and mutations.