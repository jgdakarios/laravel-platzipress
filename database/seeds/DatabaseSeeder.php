<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        App\User::create([
            'name'      => 'Joseph Dakkak',
            'email'     => 'jgdakarios@gmail.com',
            'password'  => bcrypt('testPassword')
        ]);

        factory( App\Post::class, 24)->create();
    }
}
