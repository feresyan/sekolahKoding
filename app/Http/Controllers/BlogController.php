<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index(){
      return view('blog/home');
    }

    public function show($id){
      $users = DB::table('users')->get();


      // return view('blog/show',['blog' => $id]); //Untuk passing 1 variabel
      return view('blog/show',['blog' => $id , 'users' => $users]);
    }
}
