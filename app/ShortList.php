<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShortList extends Model
{
    protected $fillable = [
        'name', 'number', 'state', 'african_class', 'african_con', 'acappella'
    ];
}
