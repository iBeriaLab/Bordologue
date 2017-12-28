<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Organisation;
class Review extends Model
{
    protected $fillable = ['star','customer','review'];
    public function organisation(){
        return $this->belongsTo(Organisation::class);
    }
}
