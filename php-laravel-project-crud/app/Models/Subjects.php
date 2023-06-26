<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{

   protected $fillable = [
      'name','description'
   ];

   protected $table = 'subjects';
}


