<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Payment extends Model
{
    protected $table = 'payments';

    protected $fillable = ['name', 'phone', 'amount','payment_type', 'transaction_reference', 'successful','memberId'];

    // Add any relationships or other custom methods if needed
}
