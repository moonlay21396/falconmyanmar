<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\CustomClass\Path;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.site_admin.banner')->with([
            'url' => 'banner'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($photo = $request->file('photos')) {
            foreach ($photo as $photo_data) {
                $photoName = uniqid() . '_' . $photo_data->getClientOriginalName();
                $photo_data->move(public_path() . '/upload/banner/', $photoName);
                Banner::create([
                    'photos' => $photoName,
                    'description' => $request->get('des')
                ]);
            }
        } else {
            echo "NO IMAGE";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Banner::findOrFail($id);
        $data['photo_url'] = Path::$domain_url . "upload/banner/" . $data->photos;
        return json_encode($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->get('id');
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photo_name = uniqid() . '_' . $photo->getClientOriginalName();
            $photo->move(public_path('upload/banner/'), $photo_name);
            $banner = Banner::find($id);
            $image_path = public_path() . '/upload/banner/' . $banner->photos;
            if (file_exists($image_path)) {
                unlink($image_path);
            }
            Banner::findOrFail($id)->update([
                'photos' => $photo_name,
                'description' => $request->get('des')
            ]);
        } else {
            Banner::findOrFail($id)->update([
                'description' => $request->get('des')
            ]);
        }
       

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function get_all_banner(){
        $data = Banner::all();
        foreach($data as $item){
            $item['photo_url'] = Path::$domain_url . "upload/banner/" . $item->photos;
        }
        
        // return $data;
        return json_encode($data);
    }
}
