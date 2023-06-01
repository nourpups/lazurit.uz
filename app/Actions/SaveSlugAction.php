<?php

namespace App\Actions;

use App\Models\Product;

class SaveSlugAction
{
    public function __invoke($slug)
    {
        return str($slug)->slug('-', 'ru');
    }
}