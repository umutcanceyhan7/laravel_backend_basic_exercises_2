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
            'possessor_guid' => 'ff2f2f5e-01fc-4658-9f45-4694e28fb0af',
            'name' => 'Ethan',
            'picture' => $possessor_images_path.'\ethan.png',
            'age' => '12',
            'score' => '0',
            ],
            [   
            'possessor_guid' => '1e7cf42e-3958-4f33-b1e9-2a0ff4bbcc4b',
            'name' => 'Cynthia',
            'picture' => $possessor_images_path.'\cynthia.jpg',
            'age' => '15',
            'score' => '0',
            ]
        ];

        // Possessor attributes assigned to the variables
        foreach($possessors as $possessor){
            $possessor_guid = $possessor['possessor_guid'];
            $name = $possessor['name'];
            $picture = $possessor['picture'];
            $age = $possessor['age'];
            $score = $possessor['score'];
            
            // Custom possessor values changed with the dummy data.
            Possessor::factory(App\Model\Possessor::class)->create([
            'possessor_guid' => $possessor_guid,    
            'name' => $name,
            'picture' => $picture,
            'age' => $age,
            'score' => $score,
            ]);
        }
    }
}
