<?php

namespace App\Http\Controllers;

use App\Models\district;
use Illuminate\Http\Request;

class DistrictsController extends Controller
{
    public function getDistricts( $selectedOption ){
        $Districts = district::where('Region', $selectedOption )->pluck('Districts')->all();
        if($Districts){
            return response()->json([
                'success'=> true,
                'Districts'=> $Districts,
            ]);
        }
        else{
            return response()->json([
                'success'=> false,
            ]);
        }
    }
}
