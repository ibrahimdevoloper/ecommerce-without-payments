<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'details' => $this->faker->text(191),
            'image'=>$this->faker->randomElement([
                'products/1.png',
                'products/2.png',
                'products/4.png',
                'products/3.png'
            ]),
            'code'=>substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,4),
            'price'=>$this->faker->randomNumber(6),
            'category_id'=>Category::all()->random()->id,
        ];
    }
}
