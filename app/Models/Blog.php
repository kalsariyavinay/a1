<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deleted_at'];  
    protected $table = 'blogs';

    public function blog_medias(): HasMany
    {
        return $this->hasMany(Blog_media::class);
    }

}
