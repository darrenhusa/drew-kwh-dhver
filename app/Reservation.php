<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Reservation extends Model
{

  public $timestamps = false;

  protected $dates = ['start_date', 'end_date'];

  // protected $dateFormat = 'Y-M-D';

}
