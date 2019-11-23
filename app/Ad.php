<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $table = 'ads';
    
    protected $fillable = ['title', 'category_id','description', 'price', 'image', 'condition', 'location', 'email', 'phone', 'user_id'];

    protected $hidden = [];
    
    public function category(){
        return $this->belongsTo('App\Listcategory');
    }
}
