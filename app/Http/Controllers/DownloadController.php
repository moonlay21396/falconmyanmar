<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Download;
use App\CustomClass\DownloadData;
use App\CustomClass\Path;

class DownloadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.site_admin.download')->with([
            'url' => 'pdf_downloads'
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
        $photo = $request->file('photo');
        $photo_name = uniqid() . '_' . $photo->getClientOriginalName();
        $photo->move(public_path('upload/pdf/pdf_photo/'), $photo_name);

        $name = $request->get('name');
        $des = $request->get('des');

        $pdf = $request->file('pdf');
        $pdf_name = uniqid() . '_' . $pdf->getClientOriginalName();
        $pdf->move(public_path('upload/pdf/'), $pdf_name);

        Download::create([
            'photo' => $photo_name,
            'name' => $name,
            'description' => $des,
            'pdf' => $pdf_name
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
        $data = Download::findOrFail($id);
        $data['photo_url'] = Path::$domain_url . "upload/pdf/pdf_photo/" . $data->photo;
        $data['pdf_url'] = Path::$domain_url . "upload/pdf/" . $data->pdf;
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

        if($request->hasFile('photo')) {
            if($request->hasFile('pdf')){
                $photo = $request->file('photo');
                $photo_name = uniqid() . '_' . $photo->getClientOriginalName();
                $photo->move(public_path('upload/pdf/pdf_photo/'), $photo_name);

                $pdf = $request->file('pdf');
                $pdf_name = uniqid() . '_' . $pdf->getClientOriginalName();
                $pdf->move(public_path('upload/pdf/'), $pdf_name);

                $downloads = Download::find($id);
                $image_path = public_path() . '/upload/pdf/pdf_photo/' . $downloads->photo;
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
                $pdf_path = public_path() . '/upload/pdf/' . $downloads->pdf;
                if (file_exists($pdf_path)) {
                    unlink($pdf_path);
                }

                Download::findOrFail($id)->update([
                    'photo' => $photo_name,
                    'name' => $request->get('name'),
                    'description' => $request->get('des'),
                    'pdf' => $pdf_name
                ]);
            }else{
                $photo = $request->file('photo');
                $photo_name = uniqid() . '_' . $photo->getClientOriginalName();
                $photo->move(public_path('upload/pdf/pdf_photo/'), $photo_name);

            // $pdf = $request->file('pdf');
            // $pdf_name = uniqid() . '_' . $pdf->getClientOriginalName();
            // $pdf->move(public_path('upload/pdf/'), $pdf_name);

                $downloads = Download::find($id);
                $image_path = public_path() . '/upload/pdf/pdf_photo/' . $downloads->photo;
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
            // $pdf_path = public_path() . '/upload/pdf/' . $downloads->pdf;
            // if (file_exists($pdf_path)) {
            //     unlink($pdf_path);
            // }

                Download::findOrFail($id)->update([
                    'photo' => $photo_name,
                    'name' => $request->get('name'),
                    'description' => $request->get('des')
                // 'pdf' => $pdf_name
                ]);
            }
        }elseif($request->hasFile('pdf')){
            //  $photo = $request->file('photo');
            // $photo_name = uniqid() . '_' . $photo->getClientOriginalName();
            // $photo->move(public_path('upload/pdf/pdf_photo/'), $photo_name);

            $pdf = $request->file('pdf');
            $pdf_name = uniqid() . '_' . $pdf->getClientOriginalName();
            $pdf->move(public_path('upload/pdf/'), $pdf_name);

            $downloads = Download::find($id);
            // $image_path = public_path() . '/upload/pdf/pdf_photo/' . $downloads->photo;
            // if (file_exists($image_path)) {
            //     unlink($image_path);
            // }
            $pdf_path = public_path() . '/upload/pdf/' . $downloads->pdf;
            if (file_exists($pdf_path)) {
                unlink($pdf_path);
            }

            Download::findOrFail($id)->update([
                'name' => $request->get('name'),
                'description' => $request->get('des'),
                'pdf' => $pdf_name
            ]);
        }else{
            Download::findOrFail($id)->update([
                'name' => $request->get('name'),
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
        $delete_pdf = Download::find($id);
        $image_path = public_path() . '/upload/pdf/pdf_photo/' . $delete_pdf->photo;
        if (file_exists($image_path)) {
            unlink($image_path);
        }
        $pdf_path = public_path() . '/upload/pdf/' . $delete_pdf->pdf;
        if (file_exists($pdf_path)) {
            unlink($pdf_path);
        }
        $delete_pdf->delete();
    }

    public function get_all_pdf(){
        $downloads = Download::orderBy('id', 'desc')->get();
        $arr = [];
        foreach ($downloads as $data) {
            $download_data = new DownloadData($data->id);
            array_push($arr, $download_data->getDownloadData());
        }
        return json_encode($arr);
    }
}

