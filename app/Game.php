<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'title',
        'description',
        'company_id'
    ];
    public function features(){
        return $this->hasMany('App\Feature');
    }
}