<?php

namespace App\Http\Controllers;

use App\CustomClass\Path;
use App\CustomClass\OurteamData;
use App\Ourteam;
use Illuminate\Http\Request;

class OurteamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.site_admin.our_team')->with([
            'url'=>'our_team'
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
        $file = $request->file('photo');
        $fileName = uniqid() . '_' . $file->getClientOriginalName();
        $file->move(public_path() . '/upload/our_team/', $fileName);

        Ourteam::create([
            'photo'=>$fileName,
            'name'=>$request->get('name'),
            'position'=>$request->get('position'),
            'fb_link'=>$request->get('fb_link')
        ]);
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
        $data = Ourteam::find($id);
        $data['photo_url']=Path::$domain_url."upload/our_team/".$data->photo;
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
        if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $photo_name = uniqid().'_'.$photo->getClientOriginalName();
            $photo->move(public_path('upload/our_team/'),$photo_name);
            $our_team = Ourteam::find($id);
            $image_path=public_path().'/upload/our_team/'.$our_team->photo;
            if(file_exists($image_path)){
                unlink($image_path);
            }
            Ourteam::findOrFail($id)->update([
                'photo'=>$photo_name,
                'name'=>$request->get('name'),
                'position'=>$request->get('position'),
                'fb_link'=>$request->get('fb_link')
            ]);
        }else {
            Ourteam::findOrFail($id)->update([
                'name'=>$request->get('name'),
                'position'=>$request->get('position'),
                'fb_link'=>$request->get('fb_link')
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
        $our_team = Ourteam::find($id);
        $image_path=public_path().'/upload/our_team/'.$our_team->photo;
        if(file_exists($image_path)){
            unlink($image_path);
        }
        $our_team->delete();
    }

    public function get_all_our_team()
    {
        $teams=Ourteam::orderBy('id', 'desc')->get();
        $arr=[];
        foreach ($teams as $data){
            $team_data=new OurteamData($data->id);
            array_push($arr,$team_data->getTeamData());
        }
        return json_encode($arr);
    }
}
