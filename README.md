# inteleon/licenseplate

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Build Status][ico-travis]][link-travis]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Validate and parse vehicle license plates.

## Install

Via Composer

``` bash
$ composer require inteleon/licenseplate
```

## Usage

``` php

use Inteleon\LicensePlates\SwedishLicensePlate;

$license = new SwedishLicensePlate('abc 123');
echo $license->isValid();
echo $license->isPersonalPlate();
echo $license->isNormalPlate();


```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email :author_email instead of using the issue tracker.

## Credits

- [Daniel Nilsson][daniel@smspark.se]
- [Johan Ivarsson][johan@smspark.se]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/:vendor/inteleon/licenseplate.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/:vendor/inteleon/licenseplate/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/:vendor/inteleon/licenseplate.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/:vendor/inteleon/licenseplate.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/:vendor/inteleon/licenseplate.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/:vendor/inteleon/licenseplate
[link-travis]: https://travis-ci.org/:vendor/inteleon/licenseplate
[link-scrutinizer]: https://scrutinizer-ci.com/g/:vendor/inteleon/licenseplate/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/:vendor/inteleon/licenseplate
[link-downloads]: https://packagist.org/packages/:vendor/inteleon/licenseplate
[link-author]: https://github.com/:author_username
[link-contributors]: ../../contributors
