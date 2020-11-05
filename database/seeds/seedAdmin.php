<?php

use App\Admin;
use Illuminate\Database\Seeder;

class seedAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obj = new Admin();
        $obj->name = 'Rent Car';
        $obj->email = 'rentcar@gmail.com';
        $obj->password = bcrypt('123456');
        $obj->save();
    }
}
