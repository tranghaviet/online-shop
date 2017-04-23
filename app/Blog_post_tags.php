<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog_post_tags extends Model
{
    protected $fillable = ['Post_ID', 'Tag_ID',];
}
