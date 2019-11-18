<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listcategory extends Model
{
    protected $table = 'listcategories';
    
    protected $fillable = ['name'];

    protected $hidden = [];
    
    public function classifieds(){
        return $this->hasMany('App\Classified');
    }
}
