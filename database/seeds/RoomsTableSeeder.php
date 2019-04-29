<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
          'room_no'=> 100,
          'category'=> "Deluxe",
          'unavailable'=> true
        ]);
        DB::table('rooms')->insert([
          'room_no'=> 101,
          'category'=> "Economy",
          'unavailable'=> false
        ]);
        DB::table('rooms')->insert([
          'room_no'=> 102,
          'category'=> "Economy",
          'unavailable'=> true
        ]);
        DB::table('rooms')->insert([
          'room_no'=> 103,
          'category'=> "Deluxe",
          'unavailable'=> true
        ]);
        DB::table('rooms')->insert([
          'room_no'=> 104,
          'category'=> "Economy",
          'unavailable'=> false
        ]);

    }
}
