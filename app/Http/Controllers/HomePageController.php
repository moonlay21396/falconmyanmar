<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homepage;

class HomePageController extends Controller
{
    public function index()
    {
        return view('admin.site_admin.homepage')->with([
            'url' => 'homepage'
        ]);
    }
    public function insert_homepage(Request $request){
        $photo = $request->file('photo');
        $photo_name = uniqid() . '_' . $photo->getClientOriginalName();
        $photo->move(public_path('upload/homepage/'), $photo_name);

        // return $photo_name;
        // return $request->get('name');
        // return $request->get('des');

        Homepage::create([
            'photo' => $photo_name,
            'name' => $request->get('name'),
            'description' => $request->get('des')
        ]);
    }

}
