<?php

use Illuminate\Database\Seeder;

class RoomDescriptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('room_des')->insert([
        'category' => "Economy",
        'rate' => 100.00,

      ]);

      DB::table('room_des')->insert([
        'category' => "Deluxe",
        'rate' => 150.00,

      ]);

      DB::table('room_des')->insert([
        'category' => "Suite",
        'rate' => 250.00,

      ]);
    }
}
