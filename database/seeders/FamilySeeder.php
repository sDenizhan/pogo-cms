<?php

namespace Database\Seeders;

use App\Models\Family;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FamilySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $families = [
            'squirtle', 'charmender', 'bulbasaur'
        ];

        //
        foreach ($families as $family) {

            Family::create([
                'name' => $family
            ]);

        }
    }
}
