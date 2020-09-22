<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sites extends Model
{
  protected $fillable = [
       'name',
       'platform',
       'apikey',
       'apisecret',
       'apiemail',
       'apipassword',
       'logo',
       'description',
       'url',
       'theme',
       'setting',
      'exc_site_id',
   ];
}
