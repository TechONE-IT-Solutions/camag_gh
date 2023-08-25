<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\website\homepage;
use App\Notifications\Activation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;


class moveAllController extends Controller
{
    public function index(){
        DB::table('members')
        ->where('type_of_membership','UnitCommiteeMember')
        ->update(['type_of_membership'=>'AssociateMember']);

        DB::table('members')
        ->where('type_of_membership','AssemblyMember')
        ->update(['type_of_membership'=>'AssociateMember']);

        $members = homepage::all();
        try {
            Notification::send($members, new Activation);
        } catch (\Exception $e) {
            // Log or handle the exception
            return redirect()->back()->with(['status' => 'error', 'message' => 'Notification sending failed']);
        }

        return redirect()->back()->with(['status'=>'sucess','message'=>'All members are Associates Now !!']);
    }

}
