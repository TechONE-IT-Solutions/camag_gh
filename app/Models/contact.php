<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;
    protected $table = 'contacts';
    protected $fillable = [
        'mail_name',
        'mail_email',
        'mail_head',
        'mail_body'
    ];
}
