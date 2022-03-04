<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class companyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */    protected $model = \App\Models\Company::class;


    public function definition()
    {
        return [
            //
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'website' => $this->faker->sentence(),
            'category' => $this->faker->sentence(),
            'address' => $this->faker->sentence(),
            'location' => $this->faker->text(),
            'phone' => $this->faker->phoneNumber(),
            'created_at' => now(),
        ];
    }
}
