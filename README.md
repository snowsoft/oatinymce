Integrate CKEDITOR into laravel-admin
======

This is a `laravel-admin` extension that integrates `CKEDITOR` into the `laravel-admin` form.

## Screenshot

![qq20180923-191508](https://user-images.githubusercontent.com/1479100/45928434-10944a00-bf76-11e8-918f-9566c7ba4c6b.png)

## Installation

```bash
composer require snowsoft/ckeditor
```

Then
```bash
php artisan vendor:publish --tag=laravel-admin-ckeditor
```

## Configuration

In the `extensions` section of the `config/admin.php` file, add some configuration that belongs to this extension.
```php

    'extensions' => [

        'ckeditor' => [
        
            //Set to false if you want to disable this extension
            'enable' => true,
            
            // Editor configuration
            'config' => [
                
            ]
        ]
    ]

```
The configuration of the editor can be found in [CKEditor Documentation](https://ckeditor.com/docs/ckeditor4/latest/guide/), such as configuration language and height.
```php
    'config' => [
        'lang'   => 'zh-CN',
        'height' => 500,
    ]
```

## Usage

Use it in the form:
```php
$form->ckeditor('content');

// Set config
$form->ckeditor('content')->options(['lang' => 'fr', 'height' => 500]);
```

 

License
------------
Licensed under [The MIT License (MIT)](LICENSE).
