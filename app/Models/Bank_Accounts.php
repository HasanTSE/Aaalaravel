<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank_Accounts extends Model
{
       protected $table = 'bank__accounts';
       protected $primarykey = 'id';
       protected $fillable = [       
        'account_name',
        'account_no',
        'bank_id',
        'branch_name',
        'opening_date',
        'opening_balance',
        'is_active',
    ];
    use HasFactory;

    public function bank_information() {
      return $this->belongsTo(Bank_Information::class, 'bank_id');
    }
}
