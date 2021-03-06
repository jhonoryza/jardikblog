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

Route::get('/', function () {
    $data = App\Post::orderBy('id', 'desc')->paginate(3);
    $cat = App\Category::all();
    return view('welcome', compact('data'), compact('cat'));
});
Route::get('/about', function(){
    $data = App\Post::orderBy('id', 'desc')->paginate(3);
    $cat = App\Category::all();
    return view('about', compact('data'), compact('cat'));
});
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/addpost/create', 'HomeController@addpost')->name('addpost.create');
Route::post('/addpost', 'HomeController@store')->name('addpost.store');
Route::delete('/addpost/{id}', 'HomeController@destroy')->name('addpost.destroy');
Route::get('/addpost/{id}/edit', 'HomeController@edit')->name('addpost.edit');
Route::patch('/addpost/{id}', 'HomeController@update')->name('addpost.update');

Route::resource('categories', 'CategoryController');

Route::get('listpost/{category_id}', function($id){
    $data = App\Post::where('category_id', $id)->orderBy('id', 'desc')->paginate(3);
    $cat = App\Category::all();
    return view('welcome', compact('data'), compact('cat'));
})->name('listpost');;