<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    public function definition()
    {
        $title = $this->faker->sentence(8);
        
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'user_id' => User::pluck('id')->random(),
            'thumb' => 'thumb/yYiZKTODaXBbUlC6lCO6IZk3jpyxLYYGlBDnWyFE.jpg',
            'content' => $this->faker->paragraph(5),
        ];
    }
}