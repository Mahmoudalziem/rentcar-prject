<?php

use Illuminate\Database\Seeder;

class seedImages extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($x=1;$x=20;$x++){
            
            $table = DB::table('images')->insert([
                'path' => 'images/slider/slider1.jpg',
                'course_id' => $x
            ]);
        }
    }
}
