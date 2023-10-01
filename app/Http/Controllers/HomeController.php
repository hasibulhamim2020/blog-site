<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class HomeController extends Controller
{
    public function index(){

        return view('front-end.home.home',[
            'blogs'=>Blog::where('status',1)
                ->orderBy('id','desc')
//                ->skip(0)
//                ->take(5)
                ->get()
        ]);
    }

    private static $blog;
    public function blogDetails($id){
        self::$blog =  Blog::where('id',$id)->first();
        return view('front-end.blog-details.blog-details',[
            'details'=>self::$blog
        ]);
    }
}
