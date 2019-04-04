<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {
      // dd('index');
      $customers = ['last_name' => 'smith', 'first_name' => 'joe'];

      // $name = "Bob";

      // return view('customers.index', ['name' => $name]);
      return view('customers.index', ['customers' => $customers]);

      // dd($customers);


    }
}
