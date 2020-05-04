<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomersController extends Controller
{

  public function index()
  {
    // dd('hello');
    $customers = Customer::all();

    return view ('customers.index', ['customers' => $customers]);
  }

  public function create()
  {

    //dd('hello');
    return view ('customers.create');
  }

  public function store()
  {
    // dd('inside store');

    $customer = new Customer();

    $customer->first_name = request('first_name');
    $customer->last_name = request('last_name');
    // dd($customer);
    $customer->save();

    return redirect('/customers');
  }

  public function edit($id)
  {
    $customer = Customer::find($id);
    return view('customers.edit', compact('customer'));
  }

  public function update($id)
  {
    $customer = Customer::find($id);

    $customer->first_name = request('first_name');
    $customer->last_name = request('last_name');

    $customer->save();

    return redirect('/customers');
  }

  public function destroy($id)
  {
    Customer::find($id)->delete();

    return redirect('/customers');
  }
}
