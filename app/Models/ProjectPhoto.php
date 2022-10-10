<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use ReinVanOyen\Cmf\Models\MediaFile;

class ProjectPhoto extends Model
{
    use HasFactory;

    protected $table = 'project_photos';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function photo()
    {
        return $this->belongsTo(MediaFile::class, 'photo_id');
    }
}
