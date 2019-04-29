<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customer;

class CustomersController extends Controller

{
    public function index()
    {
      // dd('index');
      $customers = Customer::all();

      // $name = "Bob";

      // return view('customers.index', ['name' => $name]);
      return view ('customers.index', ['customers' => $customers]);

       //dd($customers);


    }
}
