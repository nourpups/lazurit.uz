<?php

namespace App\Http\Controllers;

use App\Actions\SortCatalogAction;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends
   Controller
{

    public function home()
    {
        $categories = Category::withTranslation()->translatedIn(app()->getLocale())->latest()->get();
//        dd($categories);
        $bracelets = Category::where('slug', 'braslety')->first();
        $earrings = Category::where('slug', 'sergi')->first();
        $sets = Category::where('slug', 'komplekty')->first();

        return view('home', compact('categories', 'bracelets', 'earrings', 'sets'));
    }

    public function catalog(Request $request, Category $category, SortCatalogAction $sortCatalogAction)
    {

        $products = $request['sort']
           ? $sortCatalogAction($request['sort'], $category->id)
           : Product::withTranslation()->translatedIn(app()->getLocale())->where('category_id', $category->id)->paginate('16');

        return view('catalog.catalog', compact('category', 'products'));
    }

    public function product(Category $category, Product $product)
    {

        $relatedProducts = Product::relatedProducts($product);

        return view('catalog.product-details', compact('product', 'relatedProducts'));
    }

    public function change_lang($lang)
    {
//        dd($lang);
        app()->setLocale($lang);
        session()->put('locale', $lang);

        return redirect()->back();
    }

}