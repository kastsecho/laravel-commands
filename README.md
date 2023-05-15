# Laravel Commands
This repository contains three custom Laravel Artisan commands created by [Kasts Echo](https://github.com/kastsecho).

## Installation

To use these commands, you'll need to use Composer to install the package:

```php
composer require kastsecho/laravel-commands
```

## Usage

### `make:action`
This command generates a new action class. To use it, simply run:

```php
php artisan make:action MyNewAction
```

This will generate a new enum class named `MyNewAction` in your `app/Actions` directory.

### `make:enum`

This command generates a new enum class. To use it, simply run:

```php
php artisan make:enum MyNewEnum [--int|--string]
```

This will generate a new enum class named MyNewEnum in your `app/Enums` directory. The `--int` option generates an integer backed enum, while the `--string` option generates a string backed enum. If you don't provide any option, the default is a basic enum.

### `make:trait`

This command generates a new trait class. To use it, simply run:

```php
php artisan make:trait MyNewTrait
```

This will generate a new trait class named `MyNewTrait` in your `app/Traits` directory.

## Contributing

If you find any issues with these commands or have suggestions for improvements, feel free to open an issue or submit a pull request on the [GitHub repository](https://github.com/kastsecho/laravel-commands).

## License

This package is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

