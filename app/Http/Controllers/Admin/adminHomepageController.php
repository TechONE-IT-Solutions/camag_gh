<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class adminHomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $h_banner = Admin::select('id','meta_key', 'text', 'textarea', 'number', 'image')->where('meta_key', 'hBanner')->get()->toArray();
        
        $number = Admin::select('id','meta_key', 'text', 'textarea', 'number', 'image')->where('meta_key', 'hCounter')->get()->toArray();

        $news = Admin::select('id','meta_key', 'text', 'textarea', 'number', 'image')->where('meta_key', 'hNews')->get()->toArray();

        $teams = Admin::select('id','meta_key', 'text', 'textarea', 'number', 'image')->where('meta_key', 'hTeam')->get()->toArray();

        return view('admin.homepage', ['h_banner' => $h_banner, 'number' => $number, 'news' => $news, 'teams'=> $teams]);
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
    public function banner_store(Request $request)
    {
        //
        $destinationPath = 'CAMAG/img/';
        $myimage = time() . '.' . $request->image->getClientOriginalName();
        $request->image->move(public_path($destinationPath),$myimage);


        $postdata = [
            'meta_key'=>'hBanner',
            'text'=>$request->input('text'),
            'textarea'=>'',
            'number'=>'',
            'image'=>$destinationPath . '/' . $myimage
        ];
        Admin::create($postdata);
        return redirect('homepage')->with(['message' => 'Image Inserted in the Carousel successfully!!', 'status'=> 'success']);

    }
    public function number_store(Request $request)
    {
        //
        $postdata = [
            'meta_key'=>'hCounter',
            'text'=>$request->input('text'),
            'textarea'=>'',
            'number'=>$request->input('number'),
            'image'=>''
        ];
        Admin::create($postdata);
        return redirect('homepage')->with(['message' => 'Counter inserted successfullu!!', 'status'=> 'success']);

    }

    public function news_store(Request $request)
    {
        $destinationPath = 'CAMAG/img/';
        $myimage = time() . '.' . $request->newsImage->getClientOriginalName();
        $request->newsImage->move(public_path($destinationPath),$myimage);
        //
        $postdata = [
            'meta_key'=>'hNews',
            'text'=>$request->input('newsHeadline'),
            'textarea'=>$request->input('newsBody'),
            'number'=>'',
            'image'=> $destinationPath . '/' . $myimage
        ];
        Admin::create($postdata);
        return redirect('homepage')->with(['message' => 'News Posted successfully!!', 'status'=> 'success']);

    }

    public function team_store(Request $request)
    {
        $destinationPath = 'CAMAG/img/';
        $myimage = time() . '.' . $request->teamImage->getClientOriginalName();
        $request->teamImage->move(public_path($destinationPath),$myimage);
        //
        $postdata = [
            'meta_key'=>'hTeam',
            'text'=>$request->input('teamName'),
            'textarea'=>$request->input('teamTitle'),
            'number'=>'',
            'image'=> $destinationPath . '/' . $myimage
        ];
        Admin::create($postdata);
        return redirect('homepage')->with(['message' => 'Team member added successfully!!', 'status'=> 'success']);

    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
    public function h_banner_show(){
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
    public function destroy($id)
    {
        $HomeBannerElement = Admin::find($id);
        $HomeBannerElement->delete();
        return redirect('homepage')->with(['message' => 'Banner deleted successfully!!', 'status'=> 'success']);
    }
    public function clear($id)
    {
        $HomeBannerElement = Admin::find($id);
        $HomeBannerElement->delete();
        return redirect('homepage')->with(['message' => 'Number-card deleted successfully!!', 'status'=> 'success']);
    }
    public function cut($id)
    {
        $HomeBannerElement = Admin::find($id);
        $HomeBannerElement->delete();
        return redirect('homepage')->with(['message' => 'Blog deleted successfully!!', 'status'=> 'success']);
    }
    public function eliminate($id)
    {
        $HomeBannerElement = Admin::find($id);
        $HomeBannerElement->delete();
        return redirect('homepage')->with(['message' => 'A member from the team was Removed', 'status'=> 'success']);
    }
}
