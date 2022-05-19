Integrate Tinymce into laravel-admin
======

This is a `laravel-admin` extension that integrates `Tinymce` into the `laravel-admin` form.

 

## Installation

```bash
composer require snowsoft/tinymce
```

Then
```bash
php artisan vendor:publish --tag=laravel-admin-tinymce
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
The configuration of the editor can be found in [CKEditor Documentation](https://ckeditor.com/docs/ckeditor4/latest/guide/), such as configuration language and height.
```php
    'config' => [
        'lang'   => 'tr-TR',
        'height' => 500,
    ]
```

## Usage

Use it in the form:
```php
$form->ckeditor('content');

// Set config
$form->ckeditor('content')->options(['lang' => 'tr', 'height' => 500]);
```

 

License
------------
Licensed under [The MIT License (MIT)](LICENSE).
