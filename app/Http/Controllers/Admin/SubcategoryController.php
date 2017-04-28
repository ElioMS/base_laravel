<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Subcategory;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $subcategories = Subcategory::orderBy('created_at', 'DESC')->get();

            $subcategories = Subcategory::with('category')->orderBy('created_at', 'DESC')->get();
       
        
    
        return view('admin.subcategory.index', compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   

        $categories = Category::pluck('nombre','id');
        
        return view('admin.subcategory.create', compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'nombre' => 'required',
            'category_id' => 'required'
        ]);

        // dd(request('image'));

        Subcategory::create([
            "slug" => str_slug(request("nombre"),"-"),
            'nombre' => request('nombre'),
            'category_id' => request('category_id')
        ]);

        session()->flash('success' , 'Subcategoria creada con exito');
        return redirect()->route('subcategories.index');
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
    public function edit($slug)
    {
        $categories = Category::pluck('nombre','id');
        $subcategory = Subcategory::where('slug', $slug)->first();
        
        return view('admin.subcategory.edit' , compact('subcategory', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate(request(), [
            'nombre' => 'required',
            'category_id' => 'required'
        ]);

        $category = Subcategory::find($id);
        $category->nombre = request('nombre');
        $category->category_id = request('category_id');
        $category->save();

        session()->flash('success' , 'Subcategoria actualizada con exito');
        return redirect()->route('subcategories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
