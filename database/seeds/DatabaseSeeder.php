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
        $this->call(seedAdmin::class);

        $this->call(seedUser::class);

        $this->call(seedSellers::class);

        // $this->call(seedHouses::class);

        // $this->call(seedImages::class);
    }
}
