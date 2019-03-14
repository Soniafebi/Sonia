<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;

class CategoryController extends Controller
{
    
    public function index()
    {
        $categories = Category::all();
        return view('index', compact('categories'));
        dd($categories);
    }

}
