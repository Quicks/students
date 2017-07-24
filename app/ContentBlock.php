<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContentBlock extends Model
{
  protected $fillable = ['title', 'alias', 'text'];
}
