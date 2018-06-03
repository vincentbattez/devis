<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cgu extends Model
{
    protected $table = 'vbd_cgu';
    protected $fillable = [
        'type',
        'cgu',
    ];
    public $timestamps = false;    
}
