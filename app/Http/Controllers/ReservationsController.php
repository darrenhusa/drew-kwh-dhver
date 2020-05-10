<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use App\Customer;

class ReservationsController extends Controller
{

public function index()
  {
    $reservations = Reservation::all();
    return view ('reservations.index', ['reservations' => $reservations]);
  }


public function create()
  {
   //dd("god help me");
   return view ('reservations.create');
  }

public function create_reservation($id)
    {
      $customer = Customer::find($id);
      return view ('reservations.create', compact('customer'));
    }

public function store($customer_id)


    {
      $reservation = new Reservation();

      $reservation->room_no = request('room_no');
      $reservation->start_date = request('start_date');
      $reservation->end_date = request('end_date');
      $reservation->amount = request('amount');
      $reservation->customer_id = request('customer_id');
      $reservation->save();

          return redirect('/customers');
    }
}
