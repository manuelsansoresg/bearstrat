<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
        'section', 'slug', 'content_esp', 'content_eng'
    ];
}
