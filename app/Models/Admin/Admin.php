<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = "frontend_contents";
    protected $fillable = ['meta_key', 'text', 'textarea', 'number', 'image'];
}
