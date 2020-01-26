<?php

namespace Giuga\LaravelNovaSeoMetaboxField;

use Illuminate\Database\Eloquent\Model;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Panel;

class SeoMetabox extends Panel
{
    public $name = 'Seo Metabox';

    public function __construct($name, Model $model)
    {
        if (in_array('Giuga\LaravelSeoMetaBox\Traits\HasSeo', class_uses(get_class($model)))) {
            parent::__construct($name, [
                Text::make('Title', 'seo.title')->hideFromIndex(),
                Textarea::make('Description', 'seo.description')->hideFromIndex(),
            ]);
        }
    }
}
