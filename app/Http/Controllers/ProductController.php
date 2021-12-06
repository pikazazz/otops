<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $product = Product::get();
        return view('product.app', ['product' => $product]);
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


        $input = $request->all();
        $input['image'] = '';
        if ($image = $request->file('file_img')) {
            $destinationPath = 'image/product/' . Auth::user()->id . '/' . $request->product_title;
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }


        Product::create([
            'product_title' => $request->product_title,
            'product_detail' => $request->product_detail,
            'product_img_path' => $destinationPath . "/" . $input['image'],
        ]);


        $product = Product::get();
        return view('product.app', ['product' => $product]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $Product = Product::where('id', $id)->get();
        return view('product.view', ['product' => $Product]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Product = Product::where('id', $id)->get();
        return view('product.edit', ['product' => $Product]);
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


        $rm =   'image/product/' . Auth::user()->id;



        $folderPath = public_path($rm);

        $response = File::deleteDirectory($folderPath);

     



        $input = $request->all();
        $input['image'] = '';
        if ($image = $request->file('file_img')) {
            $destinationPath = 'image/product/' . Auth::user()->id . '/' . $request->product_title;
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }


        $product = Product::find($id);

        $product->product_title = $request->product_title;
        $product->product_detail = $request->product_detail;
        $product->product_img_path = $destinationPath . "/" . $input['image'];
        $product->save();



        $Products = Product::where('id', $id)->get();
        return view('product.edit', ['product' => $Products]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        $product = Product::get();
        return view('product.app', ['product' => $product]);
    }
}
