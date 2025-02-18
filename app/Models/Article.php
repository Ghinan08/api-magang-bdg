<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'descryption',
        'member_id',
        'category_id',
        'image',
        'image', 
    ];

     /**
     * Get the writer that owns the post
     *
     * @return BelongsTo*/
    public function category(): BelongsTo
    {
        return $this->belongsTo(TableCategory::class,'categories_id', 'id');
    }
}
