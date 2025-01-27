<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type=$this->faker->randomElement(['Individual','Company']);
        $name = ($type =='Individual' ) ? $this->faker->name() : $this->faker->company();
        return [
            'type' => $type,
            'name' => $name,
            'address' => $this->faker->streetAddress(),
            'city' => $this->faker->city(),
            'postal_code' => $this->faker->postcode()

            // Customize the fields as needed, such as generating random names, addresses, and email addresses.

            // 
        ];
    }
}
