<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Portfolio_media extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deleted_at'];  
    protected $table = 'portfolio_medias';

    public function portfolio(): BelongsTo
{
    return $this->belongsTo(Portfolio::class);
}

}
