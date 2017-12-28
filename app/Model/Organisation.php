<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Review;

class Organisation extends Model
{
    protected $fillable = ['name','detail', 'image', 'address', 'phone', 'email', 'longitude', 'latitude', 'user_id'];

    public function reviews(){
        return $this->hasMany(Review::class);
    }
}
