<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
          'first_name' => 'drew',
          'last_name' => 'olejnik',

        ]);

        DB::table('customers')->insert([
          'first_name' => 'john',
          'last_name' => 'smith',

        ]);

        DB::table('customers')->insert([
          'first_name' => 'tim',
          'last_name' => 'anderson',

        ]);


    }

}
