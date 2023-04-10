<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class UserTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = Hash::make('password');
        $adminRecords = [[
            'user_id'=>'34926968-d50c-11ed-afa1-0242ac120002',
            // 'user_id'=>'1',
            'username'=>'Admin',
            'email'=>'admin@admin.com',
            'password'=>$password,
            'role'=>'Admin',
            'is_verified'=>'true',
            'salt'=>'$2b$10$VWcevuupZAzpdObou.Jxi.',
            'metamask_address'=>'NULL',
        ]];
        User::insert($adminRecords);
    }
}
