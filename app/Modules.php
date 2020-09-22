<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modules extends Model
{
  protected $fillable = [
       'name',
       'category',
       'image',
       'description',
       'themeid',
       'html'
   ];
}
