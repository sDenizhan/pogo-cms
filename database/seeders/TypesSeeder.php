<?php

namespace Database\Seeders;

use App\Models\Types;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $types = ['bug', 'fire', 'water', 'earth', 'electric', 'grass', 'rock', 'dark', 'pscyhic', 'normal', 'fighting', 'fly', 'fairy', 'ice', 'ghost', 'steel'];

        foreach ($types as $name )
        {
            Types::create([
                'name' => $name
            ]);
        }
    }
}
