<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Session;
use App\Http\Requests\Product\CreateProductRequest;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back-end.product.index')->with('products', Product::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back-end.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductRequest $request)
    {
        //Upload image$image_tmp = $request->file('admin_image');
            //Get image extension
            $image_tmp = $request->file('image');
            $extension = $image_tmp->getClientOriginalExtension();
            //Generate new image name
            $imageName = rand(1111,99999).'.'.$extension;
            $imagePath = '/images/products/'.$imageName;
            $request->image->move(public_path('images/products/'), $imageName);
        //Create Product
        Product::create([
            'name' => $request->name,
            'ingredients' => $request->ingredients,
            'description' => $request->description,
            'image' => $imagePath,
        ]);
        //Flush message
            session::flash('success_message', 'Product created successfully');
        //Redirect
            return redirect(route('product.index'));
        
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
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        session()->flash('success_message', 'Product deleted successfully');

        return redirect(route('product.index'));
    }
}
