<?php

namespace Database\Seeders;

use App\Models\Generations;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenerationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++)
        {
            Generations::create([
                'name' => 'Jenerasyon '. $i
            ]);
        }
    }
}
