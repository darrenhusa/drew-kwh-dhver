<?php
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservations')->insert([
          'room_no'=> 100,
          'start_date'=> Carbon::createFromDate(2019, 5, 1),
          'end_date' => Carbon::createFromDate(2019, 5, 2),
          'amount' => 0,
          'customer_id' => 1
        ]);

        DB::table('reservations')->insert([
          'room_no'=> 101,
          'start_date'=> Carbon::createFromDate(2019, 5, 1),
          'end_date' => Carbon::createFromDate(2019, 5, 4),
          'amount' => 0,
          'customer_id' => 2
        ]);

        DB::table('reservations')->insert([
          'room_no'=> 102,
          'start_date'=> Carbon::createFromDate(2019, 5, 10),
          'end_date' => Carbon::createFromDate(2019, 5, 13),
          'amount' => 0,
          'customer_id' => 3
        ]);

        DB::table('reservations')->insert([
          'room_no'=> 103,
          'start_date'=> Carbon::createFromDate(2019, 5, 11),
          'end_date' => Carbon::createFromDate(2019, 5, 15),
          'amount' => 0,
          'customer_id' => 4
        ]);

        DB::table('reservations')->insert([
          'room_no'=> 104,
          'start_date'=> Carbon::createFromDate(2019, 5, 13),
          'end_date' => Carbon::createFromDate(2019, 5, 15),
          'amount' => 0,
          'customer_id' => 5
        ]);
    }

}
