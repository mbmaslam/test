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
        //this class run total seeds class of one call method.
         $this->call(DeptTableSeeder::class);
    }
}
