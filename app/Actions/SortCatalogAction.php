<?php

namespace App\Actions;

use App\Models\Product;

class SortCatalogAction
{
    public function __invoke($sort, $categoryId)
    {
        $perPage = 16;
        $productsQuery = Product::withTranslation()->translatedIn(app()->getLocale())->where('category_id', $categoryId);

        return match ($sort) {
            'asc' => $productsQuery->oldest('art')->paginate($perPage),
            'desc' => $productsQuery->latest('art')->paginate($perPage),
            'relevance' => $productsQuery->paginate($perPage),
        };
    }
}