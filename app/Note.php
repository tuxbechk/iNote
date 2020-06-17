<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    
    protected $fillable = ['title','description','message'];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
