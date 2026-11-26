<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product_Tag extends Model
{
    protected $fillable = [
        'product_id',
        'tag_id'
    ];

    public function product() : BelongsTo{
        return $this->belongsTo(Product::class);
    }

    public function tag() :BelongsTo{
        return $this->belongsTo(Tag::class);
    }
}
