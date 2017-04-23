<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable = ['UserID', 'Name', 'Phone', 'Address', 'Email',
        'OrderDay', 'Price', 'Delivered', 'DeliveryDay','Note', 'Gender',];
}
