<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleTableSeeder extends Seeder
{
    public function run(): void{
        Role::create([
            'name' => 'admin',
            'details' => 'Admin has all the access in the whole system',
            'status'=>1
        ]);
        Role::create([
            'name' => 'user',
            'details' => 'User has limited access.',
            'status'=>1
        ]);
    }
}
