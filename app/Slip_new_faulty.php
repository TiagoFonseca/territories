<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slip extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'slips';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'map'];

}
