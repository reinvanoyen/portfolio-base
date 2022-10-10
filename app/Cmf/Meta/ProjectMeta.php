<?php

namespace App\Cmf\Meta;

use ReinVanOyen\Cmf\Components\ColorField;
use ReinVanOyen\Cmf\Components\ColorView;
use ReinVanOyen\Cmf\Components\FileSelectField;
use ReinVanOyen\Cmf\Components\GalleryField;
use ReinVanOyen\Cmf\Components\Link;
use ReinVanOyen\Cmf\Components\Stack;
use ReinVanOyen\Cmf\Components\TextField;
use ReinVanOyen\Cmf\Components\TextToSlugField;
use ReinVanOyen\Cmf\Components\TextView;
use ReinVanOyen\Cmf\Meta;
use App\Models\Project;

class ProjectMeta extends Meta
{
    /**
     * @var string $model
     */
    protected static $model = Project::class;

    /**
     * @var string $title
     */
    protected static $title = 'id';

    /**
     * @var int $perPage
     */
    protected static $perPage = 10;

    /**
     * @var array $searchColumns
     */
    protected static $search = [
        'id',
    ];

    /**
     * @var array $sort
     */
    protected static $sort = [
        'id' => 'desc',
    ];

    /**
     * @return array
     */
    public static function index(): array
    {
        return [
            ColorView::make('color'),
            TextView::make('title'),
            TextView::make('slug'),
            Link::make('Delete', 'delete'),
        ];
    }

    public static function create(): array
    {
        return [
            Stack::make([
                FileSelectField::make('photo'),
                Stack::make([
                    TextToSlugField::make('title', 'slug'),
                    ColorField::make('color'),
                    TextField::make('body')
                        ->multiline(),
                    GalleryField::make('photos', 'photo', ProjectPhotoMeta::class)
                        ->orderColumn('order'),
                ])->vertical(),
            ])->grid([1, 2,]),
        ];
    }
}
