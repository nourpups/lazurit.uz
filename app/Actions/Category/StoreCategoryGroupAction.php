<?php

namespace App\Actions\Category;

use App\Actions\Image\CreateImageAction;
use App\Actions\Product\SaveSlugAction;

class StoreCategoryGroupAction
{
    public function __construct(private CreateImageAction $createImageAction, private SaveSlugAction $saveSlugAction)
    {
    }

    public function __invoke($image, $imageName, $slug)
    {
        $image = ($this->createImageAction)($image, $imageName, 'categories/image');
        $slug = ($this->saveSlugAction)($slug);

        return [
           'image' => $image,
           'slug' => $slug,
        ];
    }
}