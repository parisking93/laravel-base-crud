<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'title',
        'img',
        'description',
        'price',
        'series',
        'type',
        'sale_date'

    ];
}
