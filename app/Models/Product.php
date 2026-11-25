<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'quantity',
        'description'
    ];

    public function increseQuantity(int $amount): bool{
        $this->quantity+=$amount;
        return $this->save();
    }
    public function decreaseQuantity(int $amount): bool
    {
   
        $this->quantity = max(0, $this->quantity - $amount);
        
        return $this->save();
    }
}
