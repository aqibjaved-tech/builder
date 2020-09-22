<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
  protected $fillable = [
       'title',
       'type',
       'status',
       'active',
       'siteid',
       'filepath',
       'image',
       'filecontent',
       'folderpath',
       'filename',
       'scheduleaction',
       'scheduledate',
   ];
}
