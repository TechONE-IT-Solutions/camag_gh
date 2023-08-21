<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\website\homepage;
use Illuminate\Routing\Controller;
use Carbon\Carbon;

class webadminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $members = homepage::select('region',  homepage::raw('count(*) as total'))
            ->groupBy('region')
            ->get();

            $genders = homepage::select('gender', homepage::raw('count(*) as total'))
            ->groupBy('gender')
            ->get();

            $educations = homepage::select('educational_level', homepage::raw('count(*) as total'))
            ->groupBy('educational_level')
            ->get();

            $maritals = homepage::select('marital_status', homepage::raw('count(*) as total'))
            ->groupBy('marital_status')
            ->get();

            //$ages = home::select('age')
           // $labels = $members->keys();
           // $data = $members->values();

            $counts = homepage::select('type_of_membership', homepage::raw('count(*) as total'))
            ->groupBy('type_of_membership')
            ->get();
            //$numUCM = homepage::where('type_of_membership', '=', 'UnitCommiteeMember')->count();
            //$numASS = homepage::where('type_of_membership', '=', 'AssociateMember')->count();

            $ageRanges = [
                ['min' => 0, 'max' => 20, 'label' => '0-20'],
                ['min' => 21, 'max' => 30, 'label' => '21-30'],
                ['min' => 31, 'max' => 40, 'label' => '31-40'],
                ['min' => 41, 'max' => 50, 'label' => '41-50'],
                // Add more age ranges as needed
            ];
        
            $currentYear = Carbon::now()->year;

            $ages = [];

            foreach ($ageRanges as $range) {
                $count = homepage::select(homepage::raw("SUM(IF((YEAR(CURDATE()) - YEAR(date_of_birth)) - (RIGHT(CURDATE(), 5) < RIGHT(date_of_birth, 5)) >= {$range['min']} AND (YEAR(CURDATE()) - YEAR(date_of_birth)) - (RIGHT(CURDATE(), 5) < RIGHT(date_of_birth, 5)) <= {$range['max']}, 1, 0)) as count"))
                    ->value('count');
        
                $ages[] = 
                [
                    'range' => $range['label'],
                    'count' => $count
                ];
            }

            


            return view('admin.index', 
                [
                    'counts'=>$counts, 
                    'members'=>$members,
                    'genders'=>$genders,
                    'educations'=>$educations,
                    'maritals'=>$maritals,
                    'ages' => $ages
                ]
            );
    }

    public function getPolarChartData()
{
    $members = homepage::select('region',  homepage::raw('count(*) as total'))
    ->groupBy('region')
    ->pluck('region', 'total')
    ->get();

    $labels = $members->keys();
    $data = $members->values();

    $users = User::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
                    ->whereYear('created_at', date('Y'))
                    ->groupBy(DB::raw("Month(created_at)"))
                    ->pluck('count', 'month_name');
 
       // $labels = $users->keys();
       // $data = $users->values();
              
        return view('chart', compact('labels', 'data'));

}
    
     /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $admin)
    {
        //
    }
}
