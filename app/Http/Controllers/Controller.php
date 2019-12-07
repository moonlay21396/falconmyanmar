<?php

namespace App\Http\Controllers;

use App\About;
use App\Category;
use App\CategoryProduct;
use App\Download;
use App\Card;
use App\Banner;
use App\CustomClass\OurteamData;
use App\CustomClass\Path;
use App\CustomClass\ProjectData;
use App\CustomClass\DownloadData;
use App\CustomClass\CardData;
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
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home()
    {
        $categories = Category::all();

        $about_data = About::findOrFail(1);

        $cards = Card::orderBy('id','desc')->get();

        $banner = Banner::orderBy('id', 'desc')->get();

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
            'slide_photo'=>$slide_photo,
            'cards_data' => $cards,
            'banner' => $banner
        ]);
    }

    public function product($id)
    {
        $categories = Category::all();
        $category_name = Category::findOrFail($id);
        $product_id = Product::where('category_id',$id)->get();
        $arr = [];
        foreach ($product_id as $data){
            $products = new ProductData($data->id);
            array_push($arr,$products->getProductData());
        }
        // return $arr;
        // return $category_name->name;
        return view('user.products')->with([
                'categories'=>$categories,
                'products'=>$arr,
                'category_name'=>$category_name->name
        ]);
    }

    public function view_detail($id)
    {
        $categories = Category::all();

        // $category_name = Category::findOrFail($id);
        $product_id = Product::where('id', $id)->first();
        $products = new ProductData($product_id->id);
        $product_detail = $products->getProductData();
        // return $product_detail;
        return view('user.view_detail')->with([
            'categories'=>$categories,
            'product_detail'=> $product_detail
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

    public function search_product(Request $request){
        $categories = Category::all();

        $search_name = $request->get('search');
        $search_products=Product::where('title', 'LIKE', "%$search_name%")->get();
        $search_product_arr=[];
        foreach ($search_products as $data){
            $search_products_data=new ProductData($data->id);
            array_push($search_product_arr,$search_products_data->getProductData());
        }
        // return $search_product_arr;
        return view('user.search_product')->with([
            'search'=>$search_product_arr,
            'categories'=>$categories
        ]);
    }

    public function pdf_download(){
        $downloads = Download::orderBy('id','desc')->paginate(10);
        $arr=[];
        foreach ($downloads as $data){
            $download_data=new DownloadData($data->id);
            array_push($arr,$download_data->getDownloadData());
        }
        $categories = Category::all();
        return view('user.downloads')->with([
            'categories'=>$categories,
            'pdf_downloads'=>$arr,
            'downloads'=>$downloads
    ]);
    }
}
