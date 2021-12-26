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
        //how to add data in database
        /*  */
        $this->call(SellerTableSeeder::class);  //use to call all the seeder, without need to put manually.

        // $this->call(UsersTableSeeder::class);
    }
}
