
## Opineon

Things change, people change. Opineon!


## Installation

Require this package with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require agpretto/opineon
```

If you don't use auto-discovery add the service provider to your app.php file

``` php
\Agpretto\Opineon\OpineonServiceProvider::class
```

then, migrate Opineon tables.

``` bash
$ php artisan migrate
```
