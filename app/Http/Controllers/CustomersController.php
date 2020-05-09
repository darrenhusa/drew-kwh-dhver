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
    return view ('customers.Create');
  }



  public function store()
  {
    // dd('inside store');

    $customers = new Customer();

    $customers->first_name = request('first_name');
    $customers->last_name = request('last_name');
    // dd($customer);
    $customers->save();

    return redirect('/customers');
  }


  public function show() {
      //dd('hello world');
      //$customers = Customer::get($id);
        return view ('customers.edit',);
   }




  public function edit($id)
  {
    $customers = Customer::find($id);
    return view('customers.edit', compact('customer'));
  }

  public function update($id)
  {
    $customers = Customer::find($id);

    $customers->first_name = request('first_name');
    $customers->last_name = request('last_name');

    $customers->save();

    return redirect('/customers');
  }

  public function destroy($id)
  {
    $customers->delete($id);
    //customer::find($id)->delete($customer);
/// issue is possible here////
    return redirect('customers');
  }
}
