<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class branches extends Model
{
    use HasFactory;
    protected $fillable = [
        "branch_location",
        "branch_email",
        "branch_pnumber",
        "workers_count",
        "products_count",
    ];
}
