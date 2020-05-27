<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name',
        'email',
        'genre',
        'city',
        'country'
    ];
    
    public function games(){
        return $this->hasMany('Games::class');
    }
}
