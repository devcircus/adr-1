# Perfect Oblivion - ADR - Action Domain Responder
### A collection of BrightComponents packages for ADR organization of your Laravel app.

[![Latest Stable Version](https://poser.pugx.org/perfect-oblivion/adr/version)](https://packagist.org/packages/perfect-oblivion/adr)

![Perfect Oblivion](https://res.cloudinary.com/phpstage/image/upload/v1554128207/img/Oblivion.png "Perfect Oblivion")

### Disclaimer
The packages under the PerfectOblivion namespace exist to provide some basic functionality that I prefer not to replicate from scratch in every project. Nothing groundbreaking here.

## Installation
You can install the package via composer:

```bash
composer require perfect-oblivion/adr
```

Laravel versions > 5.6.0 will automatically identify and register the service provider.
If you are using an older version of Laravel, add the package service provider to your config/app.php file, in the 'providers' array:
```php
'providers' => [
    //...
    BrightComponents\Adr\AdrServiceProvider::class,
    //...
];
```

## Usage
The adr package brings together several other packages from the perfect-oblivion namespace, each that adds another layer to the ADR structure. The package itself comes with one command that brings all of the commands from the other packages together. For example, with the perfect-oblivion/action package, you can run ```php artisan adr:action StoreComment``` to generate a ```StoreComment`` action. Using the perfect-oblivion/responders package, running ```php artisan adr:responder StoreResponder``` will give you the resulting Responder class. The same is true for the "service" package and the "valid" package.

Now, with the "adr" package, you are given a single ```adr:make``` command to generate all of these classes at the same time.

```php artisan adr:make StoreComment``` will produce, according to your configuration settings for each package, a:
StoreComment action, StoreComment responder, and a StoreComment service.

### Optional Command Options
The ```adr:make``` command offers several options. By default, with no options, the command will generated the Action, Responder and Service classes. Passing the ```no-action```, ```no-service```, or ```no-responder``` flag, will skip generating that specific class. You can also add the ```valid``` flag to add a validator for the service. So,

```bash
php artisan adr:make StoreComment --no-responder --valid
```

will produce a StoreComment action, a StoreComment service and a StoreComment validator.
// TODO

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email clay@phpstage.com instead of using the issue tracker.

## Roadmap

We plan to work on flexibility/configuration soon, as well as release a framework agnostic version of the package.

## Credits

- [Clayton Stone](https://github.com/devcircus)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
