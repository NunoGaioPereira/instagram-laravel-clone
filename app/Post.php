<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Do not guard anything
    protected $guarded = [];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
