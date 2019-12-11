<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    
    protected $fillable = ['name', 'display_name', 'created_at', 'updated_at'];

    protected $hidden = [];

    public function users(){
        return $this->hasMany('App\User');
    }
    
}
