<?php

namespace App\Http\Controllers;

use App\CustomClass\Path;
use App\Slidephoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slide = Slidephoto::all();

        return view('admin.site_admin.slidephoto')->with([
            'url'=>'slide_photo',
            'slide'=>$slide
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
        Session::flash('insert_success','Insert Success');
        $file = $request->file('photo');
        $fileName = uniqid() . '_' . $file->getClientOriginalName();
        $file->move(public_path() . '/upload/slide_photo/', $fileName);

        Slidephoto::create([
            'photo'=>$fileName
        ]);
        return redirect('admin/slide_photo');
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
        $data = Slidephoto::find($id);
        $data['photo_url']=Path::$domain_url."upload/slide_photo/".$data->photo;
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
        Session::flash('update_success','Update Success');
        $id = $request->get('id');
        if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $photo_name = uniqid().'_'.$photo->getClientOriginalName();
            $photo->move(public_path('upload/slide_photo/'),$photo_name);
            $project = Slidephoto::find($id);
            $image_path=public_path().'/upload/slide_photo/'.$project->photo;
            if(file_exists($image_path)){
                unlink($image_path);
            }
            Slidephoto::findOrFail($id)->update([
                'photo'=>$photo_name
            ]);
        }else {
            Slidephoto::findOrFail($id)->update([

            ]);
        }
        return redirect('admin/slide_photo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Session::flash('delete_success','Delete Success');
        $slide_photo = Slidephoto::find($id);
        $image_path=public_path().'/upload/slide_photo/'.$slide_photo->photo;
        if(file_exists($image_path)){
            unlink($image_path);
        }
        $slide_photo->delete();
        return redirect('admin/slide_photo');
    }
}
