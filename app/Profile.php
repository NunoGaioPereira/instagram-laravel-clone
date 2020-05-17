<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{   
    protected $guarded = [];

    // Return profile image
    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/default.png';
        return '/storage/' . $imagePath;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
