<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        \App\User::create(array(
            'name' => 'Daniel Tinoco',
            'email' => 'dtinocolopez@gmail.com',
            'password' => Hash::make('12345'),
        ));
    }

}
