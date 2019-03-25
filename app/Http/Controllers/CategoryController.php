<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    
    public function index()
    {
        $categories = Category::all();
        return view('index', compact('categories'));
        dd($categories);
    }

    public function search(Request $request)

    {

        $query = $request->input('cari');

        $hasil = category::where('category_name', 'LIKE', '%' . $query . '%')->paginate(10);

        return view('master.result', compact('hasil', 'query'));

    }

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        //

    }

    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {

        DB::table('table_category')->insert([

            'category_name' => $request->nama_kategori,

            'remarks' => $request->remarks

        ]);



        return redirect('/kategori2');

    }

    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {

        //

    }

    /**

     * Show the form for editing the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function edit($category_id)
    {
        $categories = DB::table('table_category')->where('category_id',$category_id)->get();
        return view('master.edit',['categories' => $categories]);
    }

    public function update(Request $request)
    {
        DB::table('table_category')->where('category_id',$request->category_id)->update([
            'category_name' => $request->category_name
        ]);
            return redirect('category');
    }

    public function destroy($category_id)
    {
        DB::table('table_category')->where('category_id',$category_id)->delete();
        return redirect('category');
    }

}
