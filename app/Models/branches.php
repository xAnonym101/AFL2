<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\workers;

class branches extends Model
{
    use HasFactory;
    protected $fillable = [
        "branch_picture",
        "branch_location",
        "branch_email",
        "branch_pnumber",
        "workers_count",
    ];

    public function workers()
    {
        return $this->hasMany(workers::class);
    }

    public function products()
    {
        return $this->belongsToMany(products::class, 'branches_products', 'branches_id', 'products_id');
    }

    public function getWorkersCountAttribute()
    {
        return $this->workers->count();
    }
}
