<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(!DB::table('users')->select(["*"])->exists()){
            DB::table('users')->insert([
                ['id' => 1, 'name'=> 'dorian', 'email' => 'dorian.mayamba@savitac.com', 'password' => Hash::make('dodoetienne01'), 'role_id' => 1],
                ['id' => 2, 'name'=> 'jean-louis', 'email' => 'jlmayamba@savitac.com', 'password' => Hash::make('jletienne01'), 'role_id' => 1]
            ]);
        }
    }
}
