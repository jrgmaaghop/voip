<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offices extends Model
{
  public $timestamps = false;
    //
    protected $fillable = [
        'office', 'desc', 'local'
    ];

}
