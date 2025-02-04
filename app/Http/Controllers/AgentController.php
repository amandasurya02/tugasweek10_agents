<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function storeAgent()
    {
        DB::table('agents')->insert([
            'name' => 'Agent A',
            'description' => 'This is Agent A.',
            'release_date' => now(),
            'image' => 'agent_a.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return view('agents.success', ['message' => 'Agent added successfully!']);
    }
}
