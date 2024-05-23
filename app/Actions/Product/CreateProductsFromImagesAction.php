<?php

namespace App\Actions\Product;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;

class CreateProductsFromImagesAction
{
    public function __construct(
        public StoreProductGroupAction $storeProductGroupAction
    ) {
    }

    public function __invoke()
    {
        $basePath = storage_path('app/lazurit/products'); // Путь к папке с изображениями
        $categories = \App\Models\Category::get();
        $names = [
            'Sets' => [
                'en' => 'Set',
                'ru' => 'Комплект',
            ],
            'Rings' => [
                'en' => 'Ring',
                'ru' => 'Кольцо',
            ],
            'Chain Pendants' => [
                'en' => 'Chain Pendants',
                'ru' => 'Цепь с кулоном',
            ],
            'Chains' => [
                'en' => 'Chain',
                'ru' => 'Цепь',
            ],
            'Pendants' => [
                'en' => 'Pendant',
                'ru' => 'Кулон',
            ],
            'Bracelets' => [
                'en' => 'Bracelet',
                'ru' => 'Браслет',
            ],
            'Earrings' => [
                'en' => 'Earrings',
                'ru' => 'Серьги',
            ],
        ];
        foreach ($categories as $category) {
            $path = $basePath . '/' . strtolower($category->name);

            if (File::exists($path) && File::isDirectory($path)) {
                $files = File::files($path);

                foreach ($files as $file) {

                    $object = new UploadedFile(
                        $file->getPath().'/'.$file->getFilename(),
                        $file->getFilename(),
                        $file->getExtension(),
                        null,
                        false
                    );

                    if ($file->isFile() && in_array($file->getExtension(), ['jpg', 'jpeg', 'png', 'webp'])) {
                        $data = [
                            'category_id' => $category->id,
                            'image' => $object,
                            'price' => '106',
                            'en' => [
                                'name' => $names[$category->name]['en']
                            ],
                            'ru' => [
                                'name' => $names[$category->name]['ru']
                            ],
                        ];
                        ($this->storeProductGroupAction)($data);
                    }
                }
            }
        }
    }
}