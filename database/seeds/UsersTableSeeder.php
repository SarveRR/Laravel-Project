<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();

        $user->name = 'admin';
        $user->password = bcrypt('admin');
        $user->email = 'admin@admin.com';
        $user->save();
    }
}
