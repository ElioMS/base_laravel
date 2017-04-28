<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Subcategory;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $products = Product::with('subcategory')->orderBy('created_at', 'DESC')->get();
    
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcategories = Subcategory::pluck('nombre','id');
        
        return view('admin.product.create', compact('subcategories'));
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
            'imagen' => 'required'
        ]);

        $slug = str_slug(request("nombre"),"-");
        $aleatorio = md5($slug);
        $code = substr($aleatorio,0,8);

        // dd(request('image'));

        Product::create([
            
            "slug" => $slug,
            'nombre' => request('nombre'),
            'description' => request('description'),
            'code' => $code,
            'price' => request('price'),
            'imagen' => request('imagen'),
            'status'=>request('status'),
            'subcategory_id' => request('subcategory_id')
        ]);

        session()->flash('success' , 'Producto creado con exito');
        return redirect()->route('products.index');
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
        $subcategories = Subcategory::pluck('nombre','id');
        $product = Product::where('slug', $slug)->first();
        
        return view('admin.product.edit' , compact('product', 'subcategories'));
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
            'subcategory_id' => 'required'
        ]);

        $product = Product::find($id);
        $product->nombre = request('nombre');
        $product->subcategory_id = request('subcategory_id');
        $product->description = request('description');
        $product->price = request('price');
        $product->imagen = request('imagen');
        $product->status = request('status');



        $product->save();

        session()->flash('success' , 'Producto actualizado con exito');
        return redirect()->route('products.index');
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
