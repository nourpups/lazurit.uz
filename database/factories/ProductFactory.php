<?php

namespace Database\Factories;

use App\Actions\Product\SaveSlugAction;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Fake;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $fakeRu = Fake::create('ru_RU');

        $ruName = $fakeRu->unique()->lastName();
        $slug = (new SaveSlugAction())($ruName);

        return [
            'en' => ['name' => fake()->unique()->lastName()],
            'ru' => ['name' => $ruName],
            'slug' => $slug,
            'price' => fake()->numberBetween(50, 500),
        ];
    }
}
