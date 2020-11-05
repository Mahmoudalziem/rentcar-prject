<?php

use Illuminate\Database\Seeder;
use App\sellers;

class seedSellers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obj = new sellers();
        $obj->name = 'Mustafa Mohamed';
        $obj->email = 'mustfamohamed@gmail.com';
        $obj->image = 'images/user/user.png';
        $obj->phone = '01007449298';
        $obj->descri = 'Hello Come back';
        $obj->save();
    }
}
