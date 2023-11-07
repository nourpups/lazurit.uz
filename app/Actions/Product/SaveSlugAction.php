<?php

namespace App\Actions\Product;

use function str;

class SaveSlugAction
{
    public function __invoke($slug)
    {
        return str($slug)->slug('-', 'ru');
    }
}