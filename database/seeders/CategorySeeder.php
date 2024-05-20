<?php

namespace Database\Seeders;

use App\Actions\Product\CreateProductArt;
use App\Actions\Product\SaveSlugAction;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(CreateProductArt $createProductArt, SaveSlugAction $saveSlugAction)
    {
        Category::factory()
            ->create([
                'en' => ['name' => 'Bracelets'],
                'ru' => ['name' => 'Браслеты']
            ]);

        Category::factory()
            ->create([
                'en' => ['name' => 'Sets'],
                'ru' => ['name' => 'Комплекты']
            ]);

        Category::factory()
            ->create([
                'en' => ['name' => 'Earrings'],
                'ru' => ['name' => 'Серьги']
            ]);

        Category::factory()
            ->create([
                'en' => ['name' => 'Chain Pendants'],
                'ru' => ['name' => 'Цепи с кулоном']
            ]);

        Category::factory()
            ->create([
                'en' => ['name' => 'Chains'],
                'ru' => ['name' => 'Цепи']
            ]);

        Category::factory()
            ->create([
                'en' => ['name' => 'Pendants'],
                'ru' => ['name' => 'Кулоны']
            ]);

        Category::factory()
            ->create([
                'en' => ['name' => 'Rings'],
                'ru' => ['name' => 'Кольца']
            ]);

        $categories = Category::all();
        foreach ($categories as $category) {
            $category->slug = $saveSlugAction($category->translate('ru')->name);
            $category->save();
//            foreach ($category->products as $product) {
//                $product->art = $createProductArt($category->name, $product->id);
//                $product->save();
//            }
        }
    }
}
