<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgentsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('agents')->insert([
            'name' => 'Agent A',
            'description' => 'This is Agent A.',
            'release_date' => now(),
            'image' => 'agent_a.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
