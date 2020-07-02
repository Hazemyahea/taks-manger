<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
  protected $fillable = [
      'user_id', 'title', 'body','dead_lind','assign','status'
  ];

  // Relations
  public function user()
  {
  return  $this->belongsTo('App\User','user_id');
  }
}
