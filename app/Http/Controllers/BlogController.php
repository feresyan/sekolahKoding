<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Model\Blog;

class BlogController extends Controller
{
    public function index()
    {
    	$blogs = Blog::all();
      	return view('blog/home', ['blogs' => $blogs]);
    }

    public function show($id)
    {
      	// $users = DB::table('users')->get();

    	$blog = Blog::find($id);
    	if (!$blog) {
    		dd(404);
    		// return view('welcome');
    	} else {
    		return view('blog/show',['blog' => $blog]);
    	}


      	// return view('blog/show',['blog' => $id]); //Untuk passing 1 variabel
      	//return view('blog/show',['blog' => $id , 'users' => $users]);
   
    }

    public function edit($id)
    {
    	$blog = Blog::find($id);
    	return view('blog/edit',['blog' => $blog]);
    }

    public function update(Request $request)
    {

    	// Update
    	// $blog = Blog::where('title','Ini judul 3')->first();
    	// $blog->title = 'judul 3';
    	// $blog->save();

    	// Update mass assignment
    	Blog::find($request->id)->update([
    		'title' => $request->title,
    		'description' => $request->description,
    	]);

    	// return view('blog/show',['blog' => $request]);

    	return redirect('blog/'.$request->id);
    }

    public function create()
    {
    	return view('blog/create');
    }

    public function store(Request $request)
    {
    	// //insert biasa
    	// $blog = new Blog;
    	// $blog->title = 'Ini judul ke tiga dari blog';
    	// $blog->description = 'Ini deskripsi blog ketiga';
    	// $blog->save(); 

    	// //insert mass assignment
    	Blog::Create([
    		'title' => $request->title,
    		'description' => $request->description,
    	]);

    	return redirect('blog');
    }

    public function destroy($id)
    {
    	// delete
    	$blog = Blog::find($id);
    	$blog->delete();
    	return redirect('blog');

    	// delete ke-2
    	// Blog::destroy(2); //Blog::destroy([1,2]);
    }
}
