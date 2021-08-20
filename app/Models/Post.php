<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // mass assignment
    protected $guarded = [];

    public function user(){
        return $this->belongsTo('user_id');
    }
}
