<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $result = Product::whereTranslationLike('name', '%' . request('search') . '%')->paginate(3);

            return view('components.search_results', ['search_result'=> $result])->render();

    }
}
