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
            $this->loadViewsFrom($views, 'laravel-admin-oatinymce');
        }

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path('vendor/snowsoft/oatinymce')],
                'laravel-admin-oatinymce'
            );
        }

        Admin::booting(function () {
            Form::extend('oatinymce', Editor::class);
        });
    }
}
