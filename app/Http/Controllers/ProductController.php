<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function store(ProductRequest $request)
    {
        $store = request()->all();

        $product_name = $request[app()->getLocale()]['name'];

        $ext = $request->file('image')->getClientOriginalExtension();
        $file_name = str_replace(' ', '_', $product_name) . '_image_' . time() . '.' . $ext;
        $store['image'] = $request->file('image')->storeAs('products/image', $file_name, 'public');

        if(Product::create($store))
        {
        return redirect()->back()->with('success', 'Product ' . $product_name . ' succesfully created');
        }
        unlink(storage_path('app/public/').$file_name);
        return redirect()->back()->with('fail', 'Can\'t create product ' . $product_name);
    }
    public function edit(Product $product)
    {
      $categories = Category::get();
      return view('manager.forms.products.edit')
      ->with('product', $product)
      ->with('categories', $categories);
    }
  public function update( ProductRequest $request, Product $product)
  {

    $update = request()->all();

    $old_file_name = null;

    $ext = $request->file('image')->getClientOriginalExtension();
    $file_name = str_replace(' ', '_', $product->name) . '_image_' . time() . '.' . $ext;
    $update['image'] = $request->file('image')->storeAs('products/image', $file_name, 'public');
    $old_file_name = $product->image;
    $old_logo_path = storage_path('app/public/') . $old_file_name;

    if($product->update($update))
    {
      if(!is_null($old_file_name) && file_exists($old_logo_path))
      {
        unlink($old_logo_path);
      }
      return redirect()->back()->with('success', 'Product ' . $product->name . ' succesfully updated');
    }
    unlink(storage_path('app/public/').$file_name);
    return redirect()->back()->with('fail', 'Can\'t update product ' . $product->name);
  }

  public function delete(Product $product)
  {
   $product->delete();
    if($product)
    {
        return redirect()->back()->with('success', 'Product succesfully deleted');
    }
    return redirect()->back()->with('fail', 'Can\'t delete product');
  }
}
