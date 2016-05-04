<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

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

        // $this->call(UserTableSeeder::class);

        User::create([
            'name' => 'Jose',
            'email' => 'jose@gmail.net',
            'password' => bcrypt('admin'),
            'seen' => true,
            'valid' => true,
            'confirmed' => true
        ]);

        User::create([
            'name' => 'Philips',
            'email' => 'philips@gmail.com',
            'password' => bcrypt('user'),
            'seen' => true,
            'valid' => true,
            'confirmed' => true
        ]);

        User::create([
            'name' => 'Lito',
            'email' => 'lito@yahoo.net',
            'password' => bcrypt('user'),
            'seen' => true,
            'valid' => true,
            'confirmed' => true
        ]);
    }
}
