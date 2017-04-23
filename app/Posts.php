<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = ['Title', 'Content','Category_ID', 'Avatar', 'UserId', 'Nickname',];
}
