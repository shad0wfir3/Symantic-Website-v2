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
        DB::table('users')->truncate();

        $user = [
            'name' => 'Eamon Boonzaaier',
            'email' => 'eamon@symantic.co.za',
            'password' => bcrypt('12345')
        ];

        DB::table('users')->insert($user);
    }
}
