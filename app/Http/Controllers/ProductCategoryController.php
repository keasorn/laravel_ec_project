<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductCategoryRequest;
use App\Http\Requests\UpdateProductCategoryRequest;
use App\Models\ProductCategory;

class ProductCategoryController extends Controller
{
 
    public function index()
    {
        $categories = ProductCategory::get();
        $data = array(
            "categories" =>$categories
        );
        return view("back_end.manage_product.category.index")->with($data);
    }

   
    public function create()
    {
        return view("back_end.manage_product.category.create");
    }


    public function store(StoreProductCategoryRequest $request)
    {
        $model = new ProductCategory();

        $model->name = $request->name;
        $model->slug = $request->slug;
        $model->parent = $request->parent;

        if($model->save()){
            return redirect()->route('product_category.index')->with('success', 'Product created successfully.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCategory $productCategory)
    {
        $data = array(
            "productCategory" =>$productCategory
        );
        return view("back_end.manage_product.category.show")->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCategory $productCategory)
    {
        $data = array(
            "productCategory" =>$productCategory
        );
        return view("back_end.manage_product.category.edit")->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductCategoryRequest  $request
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductCategoryRequest $request, ProductCategory $productCategory)
    {
        //

        $model = $productCategory;

        $model->name = $request->name;
        $model->slug = $request->slug;
        $model->parent = $request->parent;
        if($model->update()){
            return redirect()->route('product_category.index')->with('success', 'Product Updted successfully.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCategory $productCategory)
    { 
        if($productCategory->delete()){
            return redirect()->route('product_category.index')->with('success', 'Product created successfully.');
        }
    }
}
