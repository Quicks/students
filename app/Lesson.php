<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = [ 'lesson_date'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
