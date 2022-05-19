<?php

namespace Encore\CKEditor;

use Encore\Admin\Form\Field\Textarea;

class Editor extends Textarea
{
    protected $view = 'laravel-admin-tinymce::editor';

    protected static $js = [
        'vendor/snowsoft/tinymce6/tinymce.min.js',
    ];

    public function render()
    {
        $config = (array) Tinymce::config('config');

        $config = json_encode(array_merge($config, $this->options));

        $this->script = <<<EOT
        tinymce.init({
            selector: 'textarea#{$this->id}',
            height: 500,
            plugins: [
              'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
              'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
              'insertdatetime', 'media', 'table', 'help', 'wordcount'
            ],
            toolbar: 'undo redo | blocks | ' +
            'bold italic backcolor | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent | ' +
            'removeformat | help',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
          });
  
EOT;
        return parent::render();
    }
}
