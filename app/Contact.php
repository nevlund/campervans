<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Kontakt extends Model
{
    public $table = 'kontakt';
    public $fillable = ['navn','email','besked'];
}
