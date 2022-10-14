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
        $thumb = $this->faker->image('public/assets/img/posts');
        
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'user_id' => User::pluck('id')->random(),
            'thumb' => Str::replace('public', '', $thumb),
            'content' => $this->faker->paragraph(5),
        ];
    }
}