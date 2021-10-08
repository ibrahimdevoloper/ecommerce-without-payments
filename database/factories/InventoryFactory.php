<?php

namespace Database\Factories;

use App\Models\Inventory;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class InventoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Inventory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'quantity'=>$this->faker->randomNumber(2),
            'date'=>$this->faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now'),
            'delivery_name' => $this->faker->name(),
            'delivery_contact' => $this->faker->text(191),
            'notes' => $this->faker->text(191),
            'expense'=>$this->faker->randomNumber(7),
            'product_id'=>Product::all()->random()->id,
        ];
    }
}
