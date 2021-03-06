<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('name', 'ASC')->where('is_published', '1')->get();
        $posts = Post::orderBy('id', 'DESC')->where('post_type', 'post')->where('is_published', '1')->paginate(5);
        return view('website.index', compact('posts', 'categories'));
    }


    public function post($slug)
      {
      }


}