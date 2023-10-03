<?php

namespace OpenAdmin\Tinymce;

use OpenAdmin\Admin\Admin;
use OpenAdmin\Admin\Form;
use Illuminate\Support\ServiceProvider;

class TinymceServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(Tinymce $extension)
    {
        if (! Tinymce::boot()) {
            return ;
        }

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'laravel-admin-tinymce');
        }

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path('vendor/snowsoft/tinymce')],
                'laravel-admin-tinymce'
            );
        }

        Admin::booting(function () {
            Form::extend('tinymce', Editor::class);
        });
    }
}
