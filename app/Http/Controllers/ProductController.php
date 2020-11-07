<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ProductController;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\product_multi_images;
use Image;
use App\User;
use Hash;
use Carbon\Carbon;
// use Auth;

class ProductController extends Controller
{
    // public function __construct()
    //   {
    //       $this->middleware('auth');
    //       $this->middleware('verified');
    //       $this->middleware('checkrole');
    //   }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('product.product-list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('product.add-product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
         'product_name' => 'required',
      ]);

        $info = Product::create($request->except('_token'));

        if ($request->hasFile('product_images')) {
           $pic_image = $request->file('product_images');
           $db_file = $info->id . '.' . $pic_image->getClientOriginalExtension();
            Image::make($pic_image)->resize(270, 350)->save( base_path('public/uploads/product_images/' . $db_file ),40 );
            $info->product_images = $db_file;
            $info->save();
        }

        // $images=array();
        if ($request->hasFile('product_multi_images')) {
       $initial = 1;
       foreach ($request->product_multi_images as $single_product_gallery) {
         $db_single = $initial . '.' . $single_product_gallery->getClientOriginalExtension();
         $initial++;
          $product_loction = "public/uploads/product_multi_images/".$info."-".$db_single;
           Image::make($single_product_gallery)->resize(450, 650)->save( base_path($product_loction),40 );
            // $images[]=$name;

       }

     }
      print_r($info);
        // return back()->with('status', 'Add Teacher successfully!');
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
         return view('product.product-edit');
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
