<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;

class EditeController extends Controller
{
  public function edit($id)
  {
      $ticket = Ticket::find($id);
      return view('edit');
  }
}
