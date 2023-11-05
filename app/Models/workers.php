<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class workers extends Model
{
    use HasFactory;
    protected $fillable = [
        "branches_id",
        "first_name",
        "last_name",
        "age",
        "email",
        "phone",
        "marital"
    ];
}
