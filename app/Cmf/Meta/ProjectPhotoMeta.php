<?php

namespace App\Cmf\Meta;

use ReinVanOyen\Cmf\Components\TextView;
use ReinVanOyen\Cmf\Meta;
use App\Models\ProjectPhoto;

class ProjectPhotoMeta extends Meta
{
    /**
     * @var string $model
     */
    protected static $model = ProjectPhoto::class;

    /**
     * @var string $title
     */
    protected static $title = 'id';

    /**
     * @var int $perPage
     */
    protected static $perPage = 10;

    /**
     * @return string
     */
    public static function getSingular(): string
    {
        return 'photo';
    }

    /**
     * @return string
     */
    public static function getPlural(): string
    {
        return 'photos';
    }

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
            TextView::make('id'),
        ];
    }
}
