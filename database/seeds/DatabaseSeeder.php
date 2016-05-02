<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // Create User Default
        \App\User::create([
            'name'     => 'admin',
            'password' => bcrypt('testtest'),
        ]);

        Model::reguard();
    }
}
