<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'name'
    ];

    public function products_tags() : HasMany{
        return $this->hasMany(Product_Tag::class);
    }
}
