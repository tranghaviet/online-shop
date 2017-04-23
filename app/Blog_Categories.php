<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog_Categories extends Model
{
    protected $table = 'blog_post_categories';
    protected $fillable = ['Category_ID', 'Post_ID',];
}
