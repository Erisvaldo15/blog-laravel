<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
   
    public function definition()
    {
        $photo = $this->faker->image('public/assets/img/users', 640, 480);
    
        return [
            'photo' => Str::replace('public','', $photo),
            'firstName' => $this->faker->firstName(),
            'lastName' => $this->faker->lastName(),
            'description' => $this->faker->text(300),
            'email' => $this->faker->safeEmail(),
            'password' => Hash::make('123456'),
        ];
    }

    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}