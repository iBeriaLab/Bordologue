<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Organisation;
class Review extends Model
{
    public function organisation(){
        return $this->belongsTo(Organisation::class);
    }
}
