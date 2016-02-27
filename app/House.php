<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
  protected $fillable = ['slip_id', 'number', 'street_id', 'type', 'status', 'description'];

  /* Each House belongs to one Slip */
  public function slip()
  {
    return $this->belongsTo('App\Slip', 'slip_id');
  }

  public function street()
  {
    return $this->belongsTo('App\Street', 'street_id');
  }
}
