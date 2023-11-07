<?php

namespace App\Actions\Product;

use App\Actions\Image\UpdateImageAction;

class UpdateProductGroupAction
{
    public function __construct(public UpdateImageAction $updateImageAction, public SaveSlugAction $saveSlugAction)
    {
    }

    public function __invoke($data, $product)
    {
        $imageName = $data['en']['name'].'_'.$product->art;
        $image = ($this->updateImageAction)($data['image'] ?? null, $product->image, $imageName, 'products/image');
        $slug = $data['ru']['name'].'-'.$product->art;
        $slug = ($this->saveSlugAction)($slug);

        $data['image'] = $image;
        $data['slug'] = $slug;

        return $data;
    }
}