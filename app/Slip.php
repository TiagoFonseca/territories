<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slip extends Model
{

  protected $fillable = ['name'];

  /**
  * Additional fields to treat as carbon instances
  * @var array
  */
  protected $dates = ['published_at'];

  /**
  * Scope queries to territories that have been assigned
  *
  * @param  [type] $query [description]
  * @return [type]        [description]
  */


  public function map()
  {
    return $this->belongsTo('App\Map', 'map_id');
  }
}
