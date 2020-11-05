<?php

use Illuminate\Database\Seeder;
use App\Users;
class seedUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obj = new users();
        $obj->name = 'Mustafa Tarek Ahmed';
        $obj->email = 'mustfatarek@gmail.com';
        $obj->password = bcrypt('123456');
        $obj->save();
    }
}
