<?php

namespace App\Http\Controllers;

use App\CategoryProduct;
use App\Product;
use App\CustomClass\ProductData;
use App\CustomClass\Path;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $file->move(public_path() . '/upload/product/', $fileName);

        $pdf = $request->file('pdf');
        $pdf_name = uniqid() . '_' . $pdf->getClientOriginalName();
        $pdf->move(public_path('upload/product_download/'), $pdf_name);

        Product::create([
            'photo'=>$fileName,
            'title'=>$request->get('title'),
            'category_id'=>$request->get('category_id'),
            'detail'=>$request->get('detail'),
            'summertable'=> $request->get('table'),
            'download_link'=> $pdf_name
        ]);
        // return $request->get('table');

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
        $data = Product::find($id);
        $data['photo_url']=Path::$domain_url."upload/product/".$data->photo;
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
            if ($request->hasFile('pdf')) {
                $photo = $request->file('photo');
                $photo_name = uniqid() . '_' . $photo->getClientOriginalName();
                $photo->move(public_path('upload/product/'), $photo_name);

                $pdf = $request->file('pdf');
                $pdf_name = uniqid() . '_' . $pdf->getClientOriginalName();
                $pdf->move(public_path('upload/product_download/'), $pdf_name);

                $products = Product::find($id);
                $image_path = public_path() . '/upload/product/' . $products->photo;
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
                $pdf_path = public_path() . '/upload/product_download/' . $products->download_link;
                if (file_exists($pdf_path)) {
                    unlink($pdf_path);
                }

                Product::findOrFail($id)->update([
                    'photo' => $photo_name,
                    'title' => $request->get('title'),
                    'category_id' => $request->get('category'),
                    'detail' => $request->get('detail'),
                    'summertable' => $request->get('table'),
                    'download_link' => $pdf_name
                ]);
            } else {
                $photo = $request->file('photo');
                $photo_name = uniqid() . '_' . $photo->getClientOriginalName();
                $photo->move(public_path('upload/product/'), $photo_name);

                $products = Product::find($id);
                $image_path = public_path() . '/upload/product/' . $products->photo;
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
        

                Product::findOrFail($id)->update([
                    'photo' => $photo_name,
                    'title' => $request->get('title'),
                    'category_id' => $request->get('category'),
                    'detail' => $request->get('detail'),
                    'summertable' => $request->get('table')
                ]);
            }
        } elseif ($request->hasFile('pdf')) {
            //  $photo = $request->file('photo');
            // $photo_name = uniqid() . '_' . $photo->getClientOriginalName();
            // $photo->move(public_path('upload/pdf/pdf_photo/'), $photo_name);

            $pdf = $request->file('pdf');
            $pdf_name = uniqid() . '_' . $pdf->getClientOriginalName();
            $pdf->move(public_path('upload/product_download/'), $pdf_name);

            $products = Product::find($id);
            // $image_path = public_path() . '/upload/pdf/pdf_photo/' . $downloads->photo;
            // if (file_exists($image_path)) {
            //     unlink($image_path);
            // }
            $pdf_path = public_path() . '/upload/product_download/' . $products->download_link;
            if (file_exists($pdf_path)) {
                unlink($pdf_path);
            }

            Product::findOrFail($id)->update([
                'title' => $request->get('title'),
                'category_id' => $request->get('category'),
                'detail' => $request->get('detail'),
                'summertable' => $request->get('table'),
                'download_link' => $pdf_name
            ]);
        } else {
            Product::findOrFail($id)->update([
                'title' => $request->get('title'),
                'category_id' => $request->get('category'),
                'detail' => $request->get('detail'),
                'summertable' => $request->get('table')
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
        $product = Product::find($id);
        $image_path=public_path().'/upload/product/'.$product->photo;
        if(file_exists($image_path)){
            unlink($image_path);
        }
        $product->delete();
    }

    public function get_all_product()
    {
        $products=Product::orderBy('id', 'desc')->get();
        $arr=[];
        foreach ($products as $data){
            $product_data=new ProductData($data->id);
            array_push($arr,$product_data->getProductData());
        }
        // return $arr;
        return json_encode($arr);
    }
}
