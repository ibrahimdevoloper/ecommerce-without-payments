<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'total_price'=>$this->faker->randomNumber(6),
            'date'=>$this->faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now'),
            'customer_notes' => $this->faker->text(191),
            'admin_notes' => $this->faker->text(191),
            'code'=>substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,12),
            'delivery_name' => $this->faker->name(),
            'delivery_contact' => $this->faker->text(191),
            'is_delivered' => $this->faker->boolean(),
            'is_varified'=>$this->faker->boolean(),
            'user_id'=>User::all()->random()->id,
        ];
    }
}
