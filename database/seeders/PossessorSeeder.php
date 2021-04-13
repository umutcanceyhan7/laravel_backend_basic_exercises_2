<?php

namespace Database\Seeders;

use App\Models\Possessor;
use Illuminate\Database\Seeder;

class PossessorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $possessor_images_path = public_path('img\possessor_images');
        $possessors =
        [ 
            [
            'possessor_guid' => 'd40d7eba-a8c4-486c-a6d2-775f75fcbe83',
            'name' => 'Ash Ketchum',
            'picture' => $possessor_images_path.'\ash_ketchum.png',
            'age' => '10',
            'score' => '0',
            ],
            [
            'possessor_guid' => 'd40d7eba-a8c4-486c-a6d2-775f75fcbe83',
            'name' => 'Ethan',
            'picture' => $possessor_images_path.'\ethan.png',
            'age' => '12',
            'score' => '0',
            ],
            [   
            'possessor_guid' => 'd40d7eba-a8c4-486c-a6d2-775f75fcbe83',
            'name' => 'Cynthia',
            'picture' => $possessor_images_path.'\cynthia.jpg',
            'age' => '15',
            'score' => '0',
            ]
        ];

        // Possessor attributes assigned to the variables
        foreach($possessors as $possessor){
            $name = $possessor['name'];
            $picture = $possessor['picture'];
            $age = $possessor['age'];
            $score = $possessor['score'];
            
            // Custom possessor values changed with the dummy data.
            Possessor::factory(App\Model\Possessor::class)->create([
            'name' => $name,
            'picture' => $picture,
            'age' => $age,
            'score' => $score,
            ]);
        }
    }
}
