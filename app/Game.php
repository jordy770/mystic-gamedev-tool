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
        return $this->hasMany(Feature::class);
    }
    //TODO continue where I left https://youtu.be/3Oxfi3DLdkI?t=86
}