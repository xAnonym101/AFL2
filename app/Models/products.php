<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $fillable = [
        "branches_selling",
        "furniture_name",
        "price",
        "stocks",
    ];
    public function branches()
    {
        return $this->belongsToMany(branches::class, 'branches_products', 'products_id', 'branches_id');
    }
}
