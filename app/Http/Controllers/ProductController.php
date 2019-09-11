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

        $category = $request->get('category_id');
        $product_id = Product::create([
            'photo'=>$fileName,
            'title'=>$request->get('title'),
            'model_no'=>$request->get('model_no'),
            'part_no'=>$request->get('part_no'),
            'capacity'=>$request->get('capacity'),
            'type_of_extinguishant'=>$request->get('type_of_extinguishant'),
            'type'=>$request->get('type'),
            'pressurised_agent'=>$request->get('pressurised_agent'),
            'working_pressure'=>$request->get('working_pressure'),
            'test_pressure'=>$request->get('test_pressure'),
            'temperature_range'=>$request->get('temperature_range'),
            'discharge_time'=>$request->get('discharge_time'),
            'overall_height'=>$request->get('overall_height'),
            'cylinder_diameter'=>$request->get('cylinder_diameter'),
            'full_weight'=>$request->get('full_weight'),
            'body_material'=>$request->get('body_material'),
            'finishing'=>$request->get('finishing'),
            'class_of_fire'=>$request->get('class_of_fire'),
            'fire_rating'=>$request->get('fire_rating'),
            'manufactured_and_approved'=>$request->get('manufactured_and_approved'),
            'throw_range_discharge'=>$request->get('throw_range_discharge'),
            'detail'=>$request->get('detail')
        ])->id;

        foreach ($category as $category_data) {
            CategoryProduct::create([
                'product_id'=>$product_id,
                'category_id'=>$category_data
            ]);
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
        if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $photo_name = uniqid().'_'.$photo->getClientOriginalName();
            $photo->move(public_path('upload/product/'),$photo_name);
            $product = Product::find($id);
            $image_path=public_path().'/upload/product/'.$product->photo;
            if(file_exists($image_path)){
                unlink($image_path);
            }
            Product::findOrFail($id)->update([
                'photo'=>$photo_name,
                'title'=>$request->get('title'),
                'model_no'=>$request->get('model_no'),
                'part_no'=>$request->get('part_no'),
                'capacity'=>$request->get('capacity'),
                'type_of_extinguishant'=>$request->get('type_of_extinguishant'),
                'type'=>$request->get('type'),
                'pressurised_agent'=>$request->get('pressurised_agent'),
                'working_pressure'=>$request->get('working_pressure'),
                'test_pressure'=>$request->get('test_pressure'),
                'temperature_range'=>$request->get('temperature_range'),
                'discharge_time'=>$request->get('discharge_time'),
                'overall_height'=>$request->get('overall_height'),
                'cylinder_diameter'=>$request->get('cylinder_diameter'),
                'full_weight'=>$request->get('full_weight'),
                'body_material'=>$request->get('body_material'),
                'finishing'=>$request->get('finishing'),
                'class_of_fire'=>$request->get('class_of_fire'),
                'fire_rating'=>$request->get('fire_rating'),
                'manufactured_and_approved'=>$request->get('manufactured_and_approved'),
                'throw_range_discharge'=>$request->get('throw_range_discharge'),
                'detail'=>$request->get('detail')
            ]);
        }else {
            Product::findOrFail($id)->update([
                'title'=>$request->get('title'),
                'model_no'=>$request->get('model_no'),
                'part_no'=>$request->get('part_no'),
                'capacity'=>$request->get('capacity'),
                'type_of_extinguishant'=>$request->get('type_of_extinguishant'),
                'type'=>$request->get('type'),
                'pressurised_agent'=>$request->get('pressurised_agent'),
                'working_pressure'=>$request->get('working_pressure'),
                'test_pressure'=>$request->get('test_pressure'),
                'temperature_range'=>$request->get('temperature_range'),
                'discharge_time'=>$request->get('discharge_time'),
                'overall_height'=>$request->get('overall_height'),
                'cylinder_diameter'=>$request->get('cylinder_diameter'),
                'full_weight'=>$request->get('full_weight'),
                'body_material'=>$request->get('body_material'),
                'finishing'=>$request->get('finishing'),
                'class_of_fire'=>$request->get('class_of_fire'),
                'fire_rating'=>$request->get('fire_rating'),
                'manufactured_and_approved'=>$request->get('manufactured_and_approved'),
                'throw_range_discharge'=>$request->get('throw_range_discharge'),
                'detail'=>$request->get('detail')
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
        CategoryProduct::where('product_id',$id)->delete();
    }

    public function get_all_product()
    {
        $products=Product::orderBy('id', 'desc')->get();
        $arr=[];
        foreach ($products as $data){
            $product_data=new ProductData($data->id);
            array_push($arr,$product_data->getProductData());
        }
        return json_encode($arr);
    }
}
