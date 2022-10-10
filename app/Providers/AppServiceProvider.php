<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Intervention\Image\Image;
use ReinVanOyen\Cmf\Contracts\MediaConverter;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $converter = app(MediaConverter::class);

        $converter->registerConversion('thumb', function (Image $image) {
            $image->resize(1400, 800, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image->sharpen(5);
            $image->resizeCanvas(1400, 800, 'center', false, '#ffffff');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
