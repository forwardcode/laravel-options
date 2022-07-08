# Laravel Options

Global key-value store in the database

## Installation

To get started with laravel-options, use Composer to add the package to your project's dependencies:

```bash
composer require forwardcode/laravel-options
```

### Publish, migrate

By running `php artisan vendor:publish --provider="Forwardcode\LaravelOptionsServiceProvider"` in your project all files for this package will be published. For this package, it's only a migration. Run `php artisan migrate` to migrate the table. There will now be an `options` table in your database.

## Usage

With the `get_option()` helper, we can get options, and with `set_option()` helper, we can set an option value.

```php
// Get option
get_option('someKey');

// Get option, with a default fallback value if the key doesn't exist
get_option('someKey', 'Some default value if the key is not found');

// Set option
set_option(['someKey' => 'someValue']);


// Check the option exists
option_exists('someKey');
```

If you want to check if an option exists, you can use the facade:

```php
use Option;

$check = Option::exists('someKey');
```


## Contributing

Contributions are welcome, [thanks to y'all](https://github.com/forwardcode/laravel-options/graphs/contributors) :)

## About Forwardcode Techstudio

Forwardcode Techstudio is a service based offshore development team focused on building secure, robust & scalable softwares.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.