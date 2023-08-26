<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\website\homepage;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    public function getMember($memberID)
    {
        $member = homepage::where('membership_id', $memberID)->first();

        if ($member) {
            return response()->json([
                'success' => true,
                'memberName' => $member->name,
                'memberphone' => $member->telephone_number,
            ]);
        } else {
            return response()->json([
                'success' => false,
            ]);
        }
    }

    public function getAll($memberID){
        $member = homepage::where('membership_id', $memberID)->first();

        if ($member) {
            return response()->json([
                'success' => true,
                'member' => $member, // Include the whole member object
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Not Found', // You can customize the message
            ]);
        }
    }
}
