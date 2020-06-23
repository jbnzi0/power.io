<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    protected $fillable = ['type', 'title', 'sponsor', 'notes'];
}
