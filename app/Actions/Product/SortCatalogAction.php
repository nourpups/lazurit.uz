<?php

namespace App\Actions\Product;

use App\Models\Product;

use function app;

class SortCatalogAction
{
    public function __invoke($sort, $categoryId)
    {
        $perPage = 16;
        $productsQuery = Product::with('category')->withTranslation()->translatedIn(app()->getLocale())->where('category_id', $categoryId);

        return match ($sort) {
            'asc' => $productsQuery->oldest('art')->paginate($perPage),
            'desc' => $productsQuery->latest('art')->paginate($perPage),
            'relevance' => $productsQuery->paginate($perPage),
        };
    }
}