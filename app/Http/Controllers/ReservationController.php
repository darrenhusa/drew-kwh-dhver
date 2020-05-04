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
}

 public function create()
 {
   dd("god help me");
   return view ('reservations.create');
 }

//public function create_reservation($id)
//
