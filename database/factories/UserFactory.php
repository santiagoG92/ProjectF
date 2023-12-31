<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
 		protected $model= User::class;

    public function definition()
    {
        return [
            'number_id' => $this->faker->randomNumber(9,true),
            'name' => fake()->name(),
            'last_name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'address' => $this->faker->address(),
            // 'email_verified_at' => now(),
            // 'password' => bcrypt(123456789), // password
			'password' => '123456789',

            'remember_token' => Str::random(10),
        ];
    }


    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
