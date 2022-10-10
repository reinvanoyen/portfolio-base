<?php

namespace App\Providers;

use App\Cmf\Modules\ProjectModule;
use ReinVanOyen\Cmf\CmfApplicationServiceProvider;
use ReinVanOyen\Cmf\Modules\MediaLibraryModule;

class CmfServiceProvider extends CmfApplicationServiceProvider
{
    public function modules(): array
    {
        return [
            new ProjectModule(),
            new MediaLibraryModule(),
        ];
    }
}
