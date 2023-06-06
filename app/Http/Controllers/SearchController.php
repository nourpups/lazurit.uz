<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends
   Controller
{
   public function search(Request $request)
   {
      $results = Product::with('category')->withTranslation()->whereTranslationLike('name', '%' . request('search') . '%')
         ->orWhere('art', 'like', '%' . request('search') . '%')
         ->paginate(8);

      return view('partials.search_results', compact('results'))->render();
   }
}
