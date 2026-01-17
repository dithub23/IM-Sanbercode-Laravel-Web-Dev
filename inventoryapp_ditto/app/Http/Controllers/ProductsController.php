<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Products;
use File;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class ProductsController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            'auth',
            new Middleware('admin', except: ['index', 'show']),
        ];
    }
  

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::get();
        return view('products.read', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categories::get();

        return view('products.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation
        $request->validate([
        'name' => 'required|min:3',
        'image' => 'required|mimes:png,jpg,jpeg|max:2048',
        'description' => 'required',
        'price' => 'required|numeric',
        'stock' => 'required|numeric',
        'category_id' => 'required',

        ], [
            'required' => 'inputan :attribute wajib diisi',
            'min' => 'inputan minimal :min karakter'
        ]);

        $imageName = time().'-'.$request->image->extension();
        $request->image->move(public_path('image'), $imageName);

        $products = new Products;
 
        $products->name = $request->input('name');
        $products->image = $imageName;
        $products->description = $request->input('description');
        $products->price = $request->input('price');
        $products->stock = $request->input('stock');
        $products->category_id = $request->input('category_id');

        $products->save();
 
        return redirect('/products')->with('success', 'Product Created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $products = Products::find($id);
        return view('products.detail', ['products' => $products]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $products = Products::find($id);
        $categories = Categories::get();
        return view('products.edit', ['products' => $products, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validation
        $request->validate([
        'name' => 'required|min:3',
        'image' => 'mimes:png,jpg,jpeg|max:2048',
        'description' => 'required',
        'price' => 'required|numeric',
        'stock' => 'required|numeric',
        'category_id' => 'required',
        ]);

        $products = Products::find($id);
        if ($request->hasFile('image')) {
            if($products->image){
            // Delete old image
            if (File::exists(public_path('image/'.$products->image))) {
                File::delete(public_path('image/'.$products->image));
            }
            // Upload new image
            $imageName = time().'-'.$request->image->extension();
            $request->image->move(public_path('image'), $imageName);
            $products->image = $imageName;
            }
        }   
        $products->name = $request->input('name');
        $products->description = $request->input('description');
        $products->price = $request->input('price');
        $products->stock = $request->input('stock');
        $products->category_id = $request->input('category_id');

        $products->save();

        return redirect('/products')->with('success', 'Product Updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $products = Products::find($id);
        // Delete image
        if($products->image){
            if (File::exists(public_path('image/'.$products->image))) {
                File::delete(public_path('image/'.$products->image));
            }   
        }
        $products->delete();
        return redirect('/products')->with('success', 'Product Deleted successfully!');
    }
}
