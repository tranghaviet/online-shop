<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlists extends Model
{
    protected $fillable = ['UserId', 'ProductId'];
    public $timestamps = false;
}
