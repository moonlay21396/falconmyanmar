<?php

namespace App\Http\Controllers;

use App\About;
use App\Whychooseus;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.site_admin.about')->with([
            'url'=>'about'
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
        //
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
        //
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
        About::findOrFail($request->get('id'))->update([
            'about_us'=>$request->get('about_us'),
            'vision'=>$request->get('vision'),
            'mission'=>$request->get('mission'),
            'value'=>$request->get('value'),
            'our_feature'=>$request->get('our_feature'),
            'why_choose_us_text'=>$request->get('why_choose_us_text'),
            'our_accreditation'=>$request->get('our_accreditation')
        ]);
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

    public function get_all_about()
    {
        $about_data = About::findOrFail(1);
        return json_encode($about_data);
    }

//    why choose us

    public function show_whychooseus()
    {
        return view('admin.site_admin.whychooseus')->with([
            'url'=>'why_choose_us'
        ]);
    }

    public function insert_whychooseus(Request $request)
    {
        Whychooseus::create([
            'fontawesome'=>$request->get('fontawesome'),
            'title'=>$request->get('title'),
            'text'=>$request->get('text')
        ]);
    }

    public function get_all_whychooseus()
    {
        $data = Whychooseus::orderBy('id','desc')->get();
        return json_encode($data);
    }

    public function edit_whychooseus($id)
    {
        $data = Whychooseus::find($id);
        return json_encode($data);
    }

    public function update_whychooseus(Request $request)
    {
        Whychooseus::findOrFail($request->get('id'))->update([
            'fontawesome'=>$request->get('fontawesome'),
            'title'=>$request->get('title'),
            'text'=>$request->get('text')
        ]);
    }

    public function destroy_why_choose_us($id)
    {
        Whychooseus::find($id)->delete();
    }

}
