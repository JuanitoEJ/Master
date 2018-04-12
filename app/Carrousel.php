<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrousel extends Model
{
   protected $fillable = [
        'titulo', 'description', 'file',
    ];

}
