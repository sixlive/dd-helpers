# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sixlive/dd-helpers.svg?style=flat-square)](https://packagist.org/packages/sixlive/dd-helpers)
[![Total Downloads](https://img.shields.io/packagist/dt/sixlive/dd-helpers.svg?style=flat-square)](https://packagist.org/packages/sixlive/dd-helpers)

## Installation

You can install the package via composer:

```bash
composer require sixlive/dd-helpers
```

## Usage

``` php
dd_if($value, true === true);
dd_if($value, function ($value) {
    return $value === 'foo';
});

foreach($foo in $bar) {
    dump_until($foo, function ($foo) use ($bar) {
        return $bar === 'baz';
    });
}
```

### Testing
Not even sure how this could be tested.

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email oss@tjmiller.co instead of using the issue tracker.

## Credits

- [TJ Miller](https://github.com/sixlive)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
