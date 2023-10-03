Integrate Tinymce into laravel-admin
======

This is a `laravel-admin` extension that integrates `Tinymce` into the `laravel-admin` form.

 

## Installation

```bash
composer require snowsoft/oatinymce
```

Then
```bash
php artisan vendor:publish --tag=laravel-admin-oatinymce
```

## Configuration

In the `extensions` section of the `config/admin.php` file, add some configuration that belongs to this extension.
```php

    'extensions' => [

        'tinymce' => [
        
            //Set to false if you want to disable this extension
            'enable' => true,
            
            // Editor configuration
            'config' => [
                
            ]
        ]
    ]

```
 
```php
    'config' => [
        'lang'   => 'tr-TR',
        'height' => 500,
    ]
```

## Usage

Use it in the form:
```php
$form->tinymce('content');

// Set config
$form->tinymce('content')->options(['lang' => 'tr', 'height' => 500]);
```

 

License
------------
Licensed under [The MIT License (MIT)](LICENSE).
