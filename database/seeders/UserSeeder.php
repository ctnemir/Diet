<?php

namespace Database\Seeders;

use App\Actions\Fortify\CreateNewUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Emircan Çetin',
            'email' => 'emircan.1670@gmail.com',
            'password' => Hash::make('1453Emir'),
            'role' => 'admin',
        ]);
    }
}
