# Laravel nova field seo metabox

[![Quality Score](https://img.shields.io/scrutinizer/g/gabrieliuga/laravel-nova-field-seo-metabox.svg?style=flat-square)](https://scrutinizer-ci.com/g/gabrieliuga/laravel-nova-field-seo-metabox)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/gabrieliuga/laravel-nova-field-seo-metabox.svg?style=flat-square)](https://packagist.org/packages/gabrieliuga/laravel-nova-field-seo-metabox)
[![Total Downloads](https://img.shields.io/packagist/dt/gabrieliuga/laravel-nova-field-seo-metabox.svg?style=flat-square)](https://packagist.org/packages/gabrieliuga/laravel-nova-field-seo-metabox)

Allow view and edit seo metabox data related to a model

### This package requires:
 - https://github.com/gabrieliuga/laravel-seo-meta-box - follow the instructions and use guide here before installing this package

## Installation

You can install the package via composer:

```bash
composer require gabrieliuga/laravel-nova-field-seo-metabox
```

## Usage

In your nova resource add the following lines

``` php
<?php

namespace App\Nova

use Giuga\LaravelNovaSeoMetaboxField\SeoMetabox;

class Example extends Resource
{
    ...
   /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),
            new SeoMetabox('Seo Metabox', $this->model()),
        ];
    }
}
```

### Nova view:

![Laravel nova panel view](https://github.com/gabrieliuga/laravel-nova-field-seo-metabox/blob/master/screenshot.png)



### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email me@iuga.dev instead of using the issue tracker.

## Credits

- [Gabriel Iuga](https://github.com/gabrieliuga)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
