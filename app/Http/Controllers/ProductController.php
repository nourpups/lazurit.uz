<?php

namespace App\Http\Controllers;

use App\Actions\Product\StoreProductGroupAction;
use App\Actions\Product\UpdateProductGroupAction;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

/**
 * @var Product $product
 */
class ProductController extends
   Controller
{

public function index() {
    session()->put('previous_page', url()->full());

    $products = Product::withTranslation()->latest()->paginate('16');
    $categories = Category::withTranslation()->get();

    return view('manager.products', compact('products', 'categories'));
}
    public function store(ProductRequest $request, StoreProductGroupAction $storeProductGroupAction)
    {
        $product_name = $request[app()->getLocale()]['name'];
        $product = $storeProductGroupAction($request->validated());

        if ($product) {
            session()->flash('success', "Product $product_name succesfully created");

            return response()->json([
               'status' => true,
               'flash' => view('partials.flash')->render()
            ]);
        }

        session()->flash('danger', "Can't create Category $product_name");

        Storage::delete($product['image']);
        return response()->json([
           'status' => true,
           'flash' => view('partials.flash')->render()
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
        Storage::delete($data['image']);
        return redirect(session('previous_page'))->with('danger', "Can't update product $product->name");
    }

    public function destroy(Product $product)
    {
        $name = $product->name;


        if ($product->delete()) {
            Storage::delete($product['image']);
            return redirect()->back()->with('danger', "Product $name succesfully deleted");
        }
        return redirect()->back()->with('danger', "Can't delete product $name");
    }
}
