<?php

namespace Encore\Tinymce;

use Encore\Admin\Extension;

class Tinymce extends Extension
{
    public $name = 'tinymce';

    public $views = __DIR__.'/../resources/views';

    public $assets = __DIR__.'/../resources/assets';
}