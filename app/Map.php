<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Map extends Model
{

  protected $fillable = ['name', 'number', 'area', 'picture', 'tags'];

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
  public function scopeUnavailable($query)
  {
    //$query->whereNotNull('finished_on');
    $query->whereHas('assignments', function ($q) {
        $q->where('finished_on', NULL);
    });
  }

/**
 * Each Map has many assignments (??) */
 */
  public function assignments(){
    return $this->hasMany('App\Assignment');
  }

/**
 * Each Map has many Slips
 */
  public function slips()
  {
    return $this->hasMany('App\Slip');
  }
}
