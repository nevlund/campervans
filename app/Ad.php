<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $table = 'ads';
    
    protected $fillable = ['title', 'listcategory_id', 'vehicle_id', 'description', 'year', 'color', 'fueltype', 'price', 'image', 'user_id'];

    protected $hidden = [];
    
}
