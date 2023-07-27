<?php

namespace App\Models\website;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class homepage extends Model
{
    use HasFactory;
    protected $table = 'registers';
    protected $fillable =['name', 'hometown', 'place_of_birth', 'date_of_birth', 'gender', 'electoral_area', 'district', 'region', 'nationality', 'residential_address', 'digital_address', 'marital_status', 'telephone_number', 'email_address', 'educational_level', 'type_of_membership', 'emergency_name', 'emergency_contact', 'emergency_relation', 'signature', 'created_at', 'updated_at', 'photo'];   
}
