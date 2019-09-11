<?php

namespace App\Http\Controllers;

use App\CustomClass\Path;
use App\CustomClass\ProjectData;
use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.site_admin.project')->with([
            'url'=>'project'
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
        $file->move(public_path() . '/upload/project/', $fileName);

        Project::create([
            'photo'=>$fileName,
            'name'=>$request->get('name'),
            'description'=>$request->get('description')
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
        $data = Project::find($id);
        $data['photo_url']=Path::$domain_url."upload/project/".$data->photo;
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
            $photo->move(public_path('upload/project/'),$photo_name);
            $project = Project::find($id);
            $image_path=public_path().'/upload/project/'.$project->photo;
            if(file_exists($image_path)){
                unlink($image_path);
            }
            Project::findOrFail($id)->update([
                'photo'=>$photo_name,
                'name'=>$request->get('name'),
                'description'=>$request->get('description')
            ]);
        }else {
            Project::findOrFail($id)->update([
                'name'=>$request->get('name'),
                'description'=>$request->get('description')
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
        $project = Project::find($id);
        $image_path=public_path().'/upload/project/'.$project->photo;
        if(file_exists($image_path)){
            unlink($image_path);
        }
        $project->delete();
    }

    public function get_all_project()
    {
        $projects=Project::orderBy('id', 'desc')->get();
        $arr=[];
        foreach ($projects as $data){
            $project_data=new ProjectData($data->id);
            array_push($arr,$project_data->getProjectData());
        }
        return json_encode($arr);
    }
}
