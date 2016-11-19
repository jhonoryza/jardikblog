<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = \App\Post::all();
        //$data = \App\Post::paginate(3);
        return view('home', compact('data'));
    }
    public function addpost(){
        $categories = \App\Category::pluck('name', 'id');
        return view('addpost', compact('categories'));
    }
    public function store(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'content' => 'required',
        ]);

        $post = new \App\Post;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->category_id = $request->category;
        $post->save();
        return redirect('/home');
    }
    public function destroy($id)
    {
        $data = \App\Post::find($id);
        $data->delete();
        return redirect('/home');
    }
    public function edit($id){
        $data = \App\Post::find($id);
        $categories = \App\Category::pluck('name', 'id');
        return view('editpost', compact('data'), compact('categories'));
    }
    public function update($id, Request $request){
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required'
        ]);

        $post = \App\Post::findOrFail($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->category_id = $request->category;
        $post->save();

        Session::flash('flash_message', 'Task successfully added!');

        return redirect('/home');
    }
}
