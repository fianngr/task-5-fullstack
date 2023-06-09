<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\articles>
 */
class articlesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->sentence(mt_rand(2,5)),
            // 'image'=>$this->faker->filePath(),
            'excerpt'=>$this->faker->paragraph(mt_rand(3,5)),
            'content'=>$this->faker->paragraph(mt_rand(7,13)),
            'user_id'=>mt_rand(1,3),
            'category_id'=>mt_rand(1,2)
        ];
    }
}
