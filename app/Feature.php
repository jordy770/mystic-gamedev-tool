<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $fillable = [
        'title',
        'description',
        'status',
        'upvote', 
        'downvote',
        'companyName',
        'gameTitle'
    ];

    public function game(){
        return $this->belongsTo('App\game');
    }

    public function comments(){
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }
}
