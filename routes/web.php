<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Controller@home');

Route::get('/about','Controller@about');

Route::get('/projects','Controller@projects');

Route::get('/products/{id}','Controller@product');
Route::get('/view_detail/{id}','Controller@view_detail');

Route::get('/story',function (){
    return view('user.story');
});

Route::get('/contact','Controller@contact');
Route::post('/sendemail/send','SandEmailController@send');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');

Route::get('logout','Auth\LoginController@logout')->middleware('auth');


Route::group(['middleware'=>['auth']],function()
{

//    product
    Route::post('/insert/product','ProductController@store');
    Route::post('/get_all_product','ProductController@get_all_product');
    Route::post('/edit/product/{id}','ProductController@edit');
    Route::post('/update/product','ProductController@update');
    Route::post('/delete/product/{id}','ProductController@destroy');

//    project
    Route::get('/admin/project','ProjectController@index');
    Route::post('/insert/project','ProjectController@store');
    Route::post('/get_all_project','ProjectController@get_all_project');
    Route::post('/edit/project/{id}','ProjectController@edit');
    Route::post('/update/project','ProjectController@update');
    Route::post('/delete/project/{id}','ProjectController@destroy');

//    about
    Route::get('/admin/about','AboutController@index');
    Route::post('/get_all_about','AboutController@get_all_about');
    Route::post('/update/about_data','AboutController@update');

//    our team
    Route::get('/admin/our_team','OurteamController@index');
    Route::post('/insert/our_team','OurteamController@store');
    Route::post('/get_all_our_team','OurteamController@get_all_our_team');
    Route::post('/edit/our_team/{id}','OurteamController@edit');
    Route::post('/update/our_team','OurteamController@update');
    Route::post('/delete/our_team/{id}','OurteamController@destroy');

//    why choose us
    Route::get('/admin/why_choose_us','AboutController@show_whychooseus');
    Route::post('/insert/why_choose_us','AboutController@insert_whychooseus');
    Route::post('/get_all_whychooseus','AboutController@get_all_whychooseus');
    Route::post('/edit/why_choose_us/{id}','AboutController@edit_whychooseus');
    Route::post('/update/why_choose_us','AboutController@update_whychooseus');
    Route::post('/delete/why_choose_us/{id}','AboutController@destroy_why_choose_us');

//    slide photo
    Route::get('/admin/slide_photo','SlideController@index');
    Route::post('insert/slide_photo','SlideController@store');
    Route::post('/edit/slide_photo/{id}','SlideController@edit');
    Route::post('/update/slide_photo','SlideController@update');
    Route::get('/delete/slide_photo/{id}','SlideController@destroy');

});
