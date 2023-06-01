<?php

namespace App\Http\Controllers;

use App\Actions\CreateProductArt;
use App\Actions\CreateImageAction;
use App\Actions\SaveSlugAction;
use App\Actions\StoreProductGroupAction;
use App\Actions\UpdateProductGroupAction;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;

/**
 * @var Product $product
 */
class ProductController extends
   Controller
{


    public function store(ProductRequest $request, StoreProductGroupAction $storeProductGroupAction)
    {
        $product_name = $request[app()->getLocale()]['name'];
        $product = $storeProductGroupAction($request->validated());

        if ($product) {
            session()->flash('success', "Product $product_name succesfully created");

            return response()->json([
               'status' => true,
               'flash' => view('partials.flashs')->render()
            ]);
        }

        session()->flash('danger', "Can't create Category $product_name");

        unlink(storage_path('app/public/').$product['image']);
        return response()->json([
           'status' => true,
           'flash' => view('partials.flashs')->render()
        ]);
    }

    public function edit(Product $product)
    {
        $categories = Category::withTranslation()->translatedIn(app()->getLocale())->get();

        return view('manager.forms.products.edit', compact('product', 'categories'));
    }

    public function update(ProductRequest $request, Product $product, UpdateProductGroupAction $updateProductGroupAction)
    {
        $data = $updateProductGroupAction($request->validated(), $product);

        if ($product->update($data)) {
            return redirect(session('previous_page'))->with('success', "Product $product->name succesfully updated");
        }
        unlink(storage_path('app/public/').$data['image']);
        return redirect(session('previous_page'))->with('danger', "Can't update product $product->name");
    }

    public function delete(Product $product)
    {
        $name = $product->name;

        if ($product->delete()) {
            return redirect()->back()->with('danger', "Product $name succesfully deleted");
        }
        return redirect()->back()->with('danger', "Can't delete product $name");
    }
}
