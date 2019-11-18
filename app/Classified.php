<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classified extends Model
{
    protected $table = 'classifieds';
    
    protected $fillable = ['title', 'category_id','description', 'price', 'image', 'condition', 'location', 'email', 'phone', 'user_id'];

    protected $hidden = [];
    
    public function category(){
        return $this->belongsTo('App\Listcategory');
    }
}
