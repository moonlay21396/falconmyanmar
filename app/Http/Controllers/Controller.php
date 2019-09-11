<?php

namespace App\Http\Controllers;

use App\About;
use App\Category;
use App\CategoryProduct;
use App\CustomClass\OurteamData;
use App\CustomClass\Path;
use App\CustomClass\ProjectData;
use App\Ourteam;
use App\Product;
use App\CustomClass\ProductData;
use App\Project;
use App\Slidephoto;
use App\Whychooseus;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home()
    {
        $categories = Category::all();

        $about_data = About::findOrFail(1);

        $projects=Project::orderBy('id', 'desc')->limit(3)->get();
        $limit_arr=[];
        foreach ($projects as $data){
            $project_data=new ProjectData($data->id);
            array_push($limit_arr,$project_data->getProjectData());
        }

        $slide_photo = Slidephoto::all();

        return view('user.index')->with([
            'categories'=>$categories,
            'about_data'=>$about_data,
            'projects_data'=>$limit_arr,
            'slide_photo'=>$slide_photo
        ]);
    }

    public function product($id)
    {
        $categories = Category::all();
        $category_name = Category::findOrFail($id);
        $product_id = CategoryProduct::where('category_id',$id)->get();
        $arr = [];
        foreach ($product_id as $data){
            $products = Product::where('id',$data->product_id)->get();
            array_push($arr,$products);
        }
//return $category_name->name;
        return view('user.products')->with([
                'categories'=>$categories,
                'products'=>$arr,
                'category_name'=>$category_name->name
        ]);
    }

    public function view_detail($id)
    {
        $categories = Category::all();

        $product_obj = new ProductData($id);
        $product_detail = $product_obj->getProductData();

        return view('user.view_detail')->with([
            'categories'=>$categories,
            'product_detail'=>$product_detail
        ]);
    }

    public function about()
    {
        $categories = Category::all();

        $about_data = About::findOrFail(1);

        $teams=Ourteam::orderBy('id', 'desc')->get();
        $team_arr=[];
        foreach ($teams as $data){
            $team_data=new OurteamData($data->id);
            array_push($team_arr,$team_data->getTeamData());
        }

        $whychooseus_data = Whychooseus::orderBy('id','desc')->get();

        return view('user.about')->with([
            'categories'=>$categories,
            'about_data'=>$about_data,
            'our_team'=>$team_arr,
            'whychooseus_data'=>$whychooseus_data
        ]);
    }

    public function projects()
    {
        $categories = Category::all();

        $projects=Project::orderBy('id', 'desc')->limit(3)->get();
        $limit_arr=[];
        foreach ($projects as $data){
            $project_data=new ProjectData($data->id);
            array_push($limit_arr,$project_data->getProjectData());
        }

        $project=Project::orderBy('id', 'desc')->get();
        $arr=[];
        foreach ($project as $data){
            $project_data=new ProjectData($data->id);
            array_push($arr,$project_data->getProjectData());
        }

        return view('user.projects')->with([
            'categories'=>$categories,
            'projects_data'=>$limit_arr,
            'project_data'=>$arr
        ]);
    }

    public function contact()
    {
        $categories = Category::all();

        return view('user.contact')->with([
            'categories'=>$categories,
        ]);
    }
}
