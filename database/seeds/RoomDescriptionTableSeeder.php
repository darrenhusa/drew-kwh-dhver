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
<<<<<<< HEAD
        'category' => "Economy",
=======
        'category' => 'Economy',
>>>>>>> 2c469076de4c762d86c756a9371f9f64b1459cd1
        'rate' => 100.00,

      ]);

      DB::table('room_des')->insert([
<<<<<<< HEAD
        'category' => "Deluxe",
=======
        'category' => 'Deluxe',
>>>>>>> 2c469076de4c762d86c756a9371f9f64b1459cd1
        'rate' => 150.00,

      ]);

      DB::table('room_des')->insert([
<<<<<<< HEAD
        'category' => "Suite",
=======
        'category' => 'Suite',
>>>>>>> 2c469076de4c762d86c756a9371f9f64b1459cd1
        'rate' => 250.00,

      ]);
    }
}
