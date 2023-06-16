<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Portfolio extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deleted_at'];      
    protected $table = 'portfolios';


    public function categoryss()
    {
        return $this->hasOne(Category::class,'id', 'category');
    }
    public function portfolio_medias(): HasMany
    {
        return $this->hasMany(Portfolio_media::class);
    }

   
}
