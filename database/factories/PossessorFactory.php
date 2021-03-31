<?php

namespace Database\Factories;

use App\Models\Possessor;
use Illuminate\Database\Eloquent\Factories\Factory;

class PossessorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Possessor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $possessor_images_path = public_path('img/possessor_images');
        return [
                'name' => 'Ash Ketchum',
                'picture' => $possessor_images_path.'/ash_ketchum.png',
                'age' => '10',
                'score' => '0',
                
        ];
    }
}
