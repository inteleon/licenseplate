# inteleon/licenseplate

[![Latest Stable Version](https://poser.pugx.org/inteleon/licenseplate/v/stable)](https://packagist.org/packages/inteleon/licenseplate)
[![Build Status](https://travis-ci.org/inteleon/licenseplate.svg?branch=master)](https://travis-ci.org/inteleon/licenseplate)
[![Total Downloads](https://poser.pugx.org/inteleon/licenseplate/downloads)](https://packagist.org/packages/inteleon/licenseplate)
[![License](https://poser.pugx.org/inteleon/licenseplate/license)](https://packagist.org/packages/inteleon/licenseplate)

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
- [All Contributors][https://github.com/inteleon/licenseplate/graphs/contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

