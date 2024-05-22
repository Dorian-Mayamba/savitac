<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(!DB::table('roles')->select(['*'])->exists()){
            DB::table('roles')->insert([
                ['id' => 1, 'type'=>'admin'],
                ['id' => 2, 'type' => 'user']
            ]);
        }
    }
}
