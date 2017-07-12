<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = [ 'lesson_date', 'description'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
