<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = "frontend_contents";
    protected $fillable = ['meta_key', 'text', 'textarea', 'number', 'image'];

    public static function get_regdues($key){
        $result = Admin::where('meta_key', $key)->first();
        if($result != null){
             return $result->number;
        }
        else{
             return false;
        }
    }

}
