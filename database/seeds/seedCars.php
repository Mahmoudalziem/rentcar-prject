<?php

use Illuminate\Database\Seeder;
use App\cars;

class seedCars extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($x=0;$x<20;$x++) {
            $obj = new cars();

            $obj->title = 'Hello Come Back';

            $obj->status = 1;

            $obj->location = 'At Home location';

            $obj->price = 100;

            $obj->seller = 1;

            $obj->geolocation = '3442,1234';

            $obj->sqft = 500;

            $obj->property = 'villa';

            $obj->bedroom = 2;

            $obj->bathroom = 3;

            $obj->descri = 'Hello Come Back In My World';

            $obj->promo = 'https://www.youtube.com';

            $obj->save();
        }
    }
}
