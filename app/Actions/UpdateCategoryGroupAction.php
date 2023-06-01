<?php

namespace App\Actions;

class UpdateCategoryGroupAction
{
    public function __construct(private UpdateImageAction $updateImageAction, private SaveSlugAction $saveSlugAction)
    {
    }

    public function __invoke($newImage, $oldImage, $imageName, $slug)
    {
        $image = ($this->updateImageAction)($newImage, $oldImage, $imageName, 'categories/image');
        $slug = ($this->saveSlugAction)($slug);
        
        return [
           'image' => $image,
           'slug' => $slug
        ];
    }
}