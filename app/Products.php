<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'productName','Description', 'price', 'promotion', 'picture', 'categoryid', 'ceasefire', 'nickname',
    ];
}
