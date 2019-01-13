<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Ricardo',
            'email'     => 't@t.com',
            'username'     => 'ricardosparapan',
            'password'  => bcrypt('123456'),
        ]);

         Category::create([
            'name' => 'PHP',
        ]);
    }
}
