# PHP KeyGet
[![Build Status](https://travis-ci.org/io-developer/php-keyget.svg?branch=master)](https://travis-ci.org/io-developer/php-keyget)
[![Packagist](https://img.shields.io/packagist/v/io-developer/php-keyget.svg)](https://packagist.org/packages/io-developer/php-keyget)

Solves routine actions like 'Get array value by key or default if not exists' and 'Ensure array has key or set to default'

## Installation

##### System requirements:
PHP >= __5.0__ (tests for __7.1__ up to __nightly__)

##### Composer:
````
composer require io-developer/php-keyget
````
or composer.json:
````
"require": {
    "io-developer/php-keyget": "*"
}
````

## Examples

##### Get value by key of default if not exists
```php
<?php

$arr = ['foo' => 'bar'];
var_dump([
    key_get($arr, 'foo'), // 'bar'
    key_get($arr, 'baz'), // null
    key_get($arr, 'baz', 'Ooops!'), // 'Ooops!'
]);
```

##### Set value if key not exists
```php
<?php

$arr = ['foo' => 'bar'];

key_setdefault($arr, 'foo', 'meow');
var_dump($arr);  // no changes

key_setdefault($arr, 'baz', 'meow');
var_dump($arr);  // ['foo' => 'bar', 'baz' => 'meow']
```