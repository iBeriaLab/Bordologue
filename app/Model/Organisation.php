<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Review;

class Organisation extends Model
{
    protected $fillable = ['name','detail', 'image', 'address', 'phone', 'email', 'longitude', 'latitude'];

    public function reviews(){
        return $this->hasMany(Review::class);
    }
}
