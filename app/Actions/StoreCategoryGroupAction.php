<?php

namespace App\Actions;

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