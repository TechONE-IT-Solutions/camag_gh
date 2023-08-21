<?php

namespace App\Http\Controllers;
use validation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;

class userSettings extends Controller
{
      /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.userSettings');
        //
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
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|email',
            'cpassword'=>'required|same:password'
        ]);

    }


    /**
     * Store a newly created resource in storage.
     */
    public function storeprofile(Request $request)
    {
        //
       /*  $request->validate([
            'name'=> 'required',
            'email'=> ['required', 'string', 'email', 'max:255', 'unique:users']
        ]); */
        $userid = Auth::user()->id;

        User::updateOrCreate(['id'=> Auth::user()->id],
        [
            'name'=> $request->input('name'),
            'email'=>$request->input('email')
        ]);

        return redirect('admin/user_settings')->with(['message'=>'Profile Updated', 'status'=>'success']);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function storepassword(Request $request)
    {
        //
         $request->validate([
            'password'=>'required',
            'cpassword'=> 'required|same:password'
        ]); 

        user::updateorCreate(['id'=> Auth::user()->id],
        [
            'password'=> Hash::make($request->input('password'))
        ]);

        return redirect('admin/user_settings')->with
        (
            ['message'=>'Password Updated','status'=>'success'],
            ['message'=>'Password Update Error. Try again', 'status'=>'error']
        );
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }


    /**
     * Create New System Administrator
     */
    public function storeAdminReg(Request $request){
        
       /*  $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|email',
            'cpassword'=>'required|same:password'
        ]); */
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]); 

        $strToken = Str::random(60);

        if(user::where('remember_token', '=', $strToken)->exists()){
            $strToken = Str::random(61);
        }

        user::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>Hash::make($request->input('password')),
            'remember_token'=> Str::random(60)
        ]);


       

        return redirect('admin/user_settings')->with(['message'=>'New System Admninistor Created', 'status'=>'success']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        return view
        (
            'admin.userSettings',
            [
                'id'=>$id
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
