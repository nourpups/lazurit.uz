<?php

namespace App\Actions\Product;

use App\Actions\Image\CreateImageAction;
use App\Models\Product;

class StoreProductGroupAction
{

    public function __construct(public CreateImageAction $createImageAction, public CreateProductArt $createProductArt, public SaveSlugAction $saveSlugAction)
    {
    }

    public function __invoke($data)
    {
        $product = Product::create($data);

        $art = ($this->createProductArt)($product->category->translate('en')->name, $product->id);
        $product->art = $art;

        $slug = $data['ru']['name'].'_'.$product->art;
        $slug = ($this->saveSlugAction)($slug);
        $data['slug'] = $slug;

        $imageName = $data['en']['name'].'_'.$art;
        $image = ($this->createImageAction)($data['image'], $imageName, 'products/image');
        $product->image = $image;

        return $product->save();
    }

}