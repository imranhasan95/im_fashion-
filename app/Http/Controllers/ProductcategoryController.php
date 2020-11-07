<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ProductcategoryController;

use Illuminate\Http\Request;
use App\Models\Productcategory;

class ProductcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
          $pro_cetagores = Productcategory::all();
        return view('Category.product-category-list', [
          'pro_cetagores' => $pro_cetagores,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('Category.product-category');
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
          'category_name'=>'required',
      ]);

      Productcategory::create($request->all());

      return back()->with('status', 'Add Product Category successfully!');
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
      $category_info = Productcategory::findOrFail($id);
        return view('Category.product-category-edit', [
          'category_info' => $category_info,
        ]);
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
      $category_info = Productcategory::findOrFail($request->id)->update([
          'category_name' => $request->category_name,
        ]);

        return redirect('productcategory')->with('edit_status', 'Add Product Category  Update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Productcategory::find($id)->delete();
        return redirect('/productcategory');
    }
}
