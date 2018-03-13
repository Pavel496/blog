<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function show(Category $category)
    {
      // $posts = $category->posts;

      // return view('welcome', compact('posts'));
      return view('welcome', [
        'category' => $category,
        'posts' => $category->posts()->paginate(1)
      ]);
    }

}
