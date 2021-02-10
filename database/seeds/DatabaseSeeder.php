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
        $users = factory(App\User::class, 20000)->make()->toArray();

        foreach ($users as $user) {
            App\User::create($user);
        }
    }
}
