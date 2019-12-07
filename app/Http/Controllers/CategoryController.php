<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\CustomClass\ProductData;
use App\CustomClass\CategoryData;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.site_admin.category')->with([
            'url' => 'category'
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
        Category::create([
            'name' => $request->get('name')
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
        $data = Category::findOrFail($id);
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
        Category::findOrFail($id)->update([
            'name' => $request->get('name')
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_category($id)
    {
        Category::findOrFail($id)->delete();

        $cate_product = Product::where('category_id', $id)->get();
        foreach ($cate_product as $data) {
            $image_paths = public_path() . '/upload/product/' . $data->photo;
            if (file_exists($image_paths)) {
                unlink($image_paths);
            }

            $pdf_paths = public_path() . '/upload/product_download/' . $data->download_link;
            if (file_exists($pdf_paths)) {
                unlink($pdf_paths);
            }
            $data->delete();
        }
        return response()->json(true);
    }
    public function destroy_cat_product($id){
        $mem_company = Product::where('category_id', $id)->get();
        return response()->json(count($mem_company));
    }
    public function get_all_category(){
        $categorys = Category::orderBy('id','desc')->get();
        $arr = [];
        foreach ($categorys as $data) {
            $category_data = new CategoryData($data->id);
            array_push($arr, $category_data->getCategoryData());
        }
        return json_encode($arr);
    }
}
