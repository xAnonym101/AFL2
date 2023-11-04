<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shop_branches extends Model
{
    use HasFactory;
    protected $fillable = [
        "branch_id",
        "branch_location",
        "branch_email",
        "branch_phone_number",
        "workers_count",
        "products_count",
    ];
}
