<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Inertia\Inertia;

class FrontendController extends Controller
{
   public function index(){
    $posts=Post::all();
   //  dd($posts);
      return Inertia::render('Home', compact('posts'));
   }
   public function about(){
      return Inertia::render('About');
   }
}
