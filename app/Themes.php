<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Themes extends Model
{
  protected $fillable = [
     'name', 'active','favicon','image','description','setting','authorwebsite','authorname',
     'authoremail','platforms'
 ];
}
