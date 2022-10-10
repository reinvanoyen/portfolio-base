<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use ReinVanOyen\Cmf\Models\MediaFile;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    /**
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function photo()
    {
        return $this->belongsTo(MediaFile::class, 'photo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function photos()
    {
        return $this->hasMany(ProjectPhoto::class)->orderBy('order', 'asc');
    }

    /**
     * @return bool|null
     */
    public function delete()
    {
        foreach ($this->photos as $photo) {
            $photo->delete();
        }

        return parent::delete();
    }
}
