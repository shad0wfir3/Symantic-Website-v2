<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = [
            'name' => 'Eamon Boonzaaier',
            'email' => 'eamon@symanticreative.com',
            'password' => bcrypt('12345')
        ];

        DB::table('users')->insert($user);
    }
}
