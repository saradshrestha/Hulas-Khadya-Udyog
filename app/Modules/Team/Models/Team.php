<?php

namespace Team\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{

    protected $fillable = [
        'name',
        'designation',
        'position',
        'fb_link',
        'twitter_link',
        'insta_link','linkedin_link','status','image'
    ];
  
}
