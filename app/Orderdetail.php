<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{
    protected $table = 'orderdetail';
    protected $fillable = ['ProductID', 'Quantity', 'Price', 'Sum',];
    public $timestamps = false;
}
