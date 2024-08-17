# Description

PhpMixedConvert is PHP utility class that provides methods to convert mixed values to strings, ints or floats.

Sometimes there is necessity in a code to ensure that our variable is string, int or float, especially strict types declaration is enabled in the class. On other hand, there is sometimes cases when the exact type is unknown. For example, it happens often in Laravel and probably could happen in any other project/code structure. 

So this utility class has 3 static methods to just convert variable with mixed type to certain type depends on context. 

P.S. We surely could detect such cases when to convert from mixed to exact type due static analysis (for example, wtih PHPStan).

## Installation

To install the package, run the following command in your Laravel project:

```bash
composer require labrodev/php-mixed-converter
```

## Requirements

- PHP 8.1 or higher

## Configuration

After installing the package, no additional configuration is needed to start using utility.

## Usage

To use the utility, use Utility class in your class and just call existed static methods from it:

```php 

<?php

namespace YourNamespace;

use Labrodev\PhpMixedConverter\MixedConverter;

class YourClass extends Model
{
   
    // somewhere in your code

    // convert mixed to string
    $value = MixedConverter::toString($value);

    // convert mixed to float
    $value = MixedConverter::toFloat($value);

    // convert mixed to int
    $value = MixedConverter::toInt($value);

}
```

## Testing

To run the tests included with the package, execute the following command:

```bash
composer test
```

## Security

If you discover any security-related issues, please email admin@labrodev.com instead of using the issue tracker.

## Credits

Labro Dev

## License

The MIT License (MIT). Please see License File for more information.

## Read more

Read more about our web development experince on our [Substack page - Labrodev](https://labrodev.substack.com).