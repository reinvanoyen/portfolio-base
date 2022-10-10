<?php

namespace App\Cmf\Modules;

use App\Cmf\Meta\ProjectMeta;
use ReinVanOyen\Cmf\Action\Action;
use ReinVanOyen\Cmf\Action\Create;
use ReinVanOyen\Cmf\Action\Delete;
use ReinVanOyen\Cmf\Action\Edit;
use ReinVanOyen\Cmf\Action\Index;
use ReinVanOyen\Cmf\Components\Link;
use ReinVanOyen\Cmf\Module;

class ProjectModule extends Module
{
    protected function title(): string
    {
        return 'Projects';
    }

    /**
     * @return Action
     */
    public function index(): Action
    {
        return Index::make(ProjectMeta::class)
            ->grid([0, 1, 1, 0,])
            ->action('edit')
            ->header([
                Link::make('New project', 'create')
                    ->style('primary'),
            ]);
    }

    /**
     * @return Action
     */
    public function create(): Action
    {
        return Create::make(ProjectMeta::class);
    }

    /**
     * @return Action
     */
    public function edit(): Action
    {
        return Edit::make(ProjectMeta::class);
    }

    /**
     * @return Action
     */
    public function delete(): Action
    {
        return Delete::make(ProjectMeta::class);
    }
}
