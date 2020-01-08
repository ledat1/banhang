<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::Create([
            'name'     => 'admin','email'    => 'admin@gmail.com','password' => bcrypt('123123'),
            'name'     => 'datle','email'    => 'ledat@gmail.com','password' => bcrypt('234234'),
            'name'     => 'ledat','email'    => 'a@gmail.com','password' => bcrypt('999999'),
        ]);
    }
}
