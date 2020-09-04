<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\ProductDetail;
use App\ProductPhoto;
use DB;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        DB::enableQueryLog();

//        $productPhoto = ProductPhoto::find(1);
//        echo $productPhoto->product->name;
//        exit();

//        $products = Category::find(1)->products;
//        foreach ($products as $item) {
//            echo $item->pivot->created_at;
//        }
//        dd();

        // Lazy Loading
//        $products = Product::all();
//        foreach ($products as $product) {
//            echo $product->productDetail->name;
//        }

        // Eager Loading
//        $products = Product::with(['productDetail'])->get();
//        foreach ($products as $product) {
//            echo $product->productDetail->name;
//        }


//        $product = (new Product())->popular()->get();
        $product = Product::find(1)->view;
        dd($product);

        dd(DB::getQueryLog());
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
        //
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
    public function destroy($id)
    {
        //
    }
}
