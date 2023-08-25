<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\website\homepage;
use Illuminate\Support\Facades\DB;

class ActivateController extends Controller
{
    public function index(){
        return view('website.activation');
    }
    public function store(Request $request){
       $postData = $request->input('activate');
        $postDataLock = [];
        $postDataPass = [];
       for($i=0; $i<3; $i++){
        $postDataLock[$i] = strtoupper($postData[$i]);
       }
       $postDataKey = homepage::select('membership_id')->where('membership_id',$postData)->pluck('membership_id')->first();
       if(!$postDataKey){
        return redirect()->back()->with(['status'=>'danger','message'=>'Please check your Membership ID and try again. Your ID has no correspondace on our system']);
       }
       for($i=0; $i<3; $i++){
        $postDataPass[$i] = $postDataKey[$i];
       }
       $charString = implode("", $postDataPass);

       if($charString === "ASM"){
        DB::table('members')
        ->where('membership_id', $postData)
        ->update(['type_of_membership'=> 'AssemblyMember']);
        return redirect()->back()->with(['status'=> 'success','message'=>'Congratulations!! Your activation was a success. You have now restored your Assembly membership in CAMAG']);
       }
       else if($charString === "UCM"){
        DB::table('members')
        ->where('membership_id', $postData)
        ->update(['type_of_membership'=> 'UnitCommiteeMember']);
        return redirect()->back()->with(['status'=> 'success','message'=>'Congratulations!! Your activation was a success. You have now restored your Unit Committee membership in CAMAG']);
       }
       return redirect()->back()->with(['status'=>'danger','message'=>'Please check your Membership ID and try again. Your ID has no correspondace in our system']);
    }
}
