<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;

class CategoryController extends Controller
{
    
    public function index()
    {
        $hasil = category::all();
        return view('kategori', ['data'=>$hasil]);
    }

}
