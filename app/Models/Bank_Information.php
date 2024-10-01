<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank_Information extends Model
{
       protected $table = 'bank__information';
       protected $primarykey = 'id';
       protected $fillable = [       
        'bank_name',
        'short_name',
        'is_active',
    ];

    use HasFactory;
}
