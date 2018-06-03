<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Devis extends Model
{
    protected $table = 'vbd_devis';
    protected $fillable = [
        'id_user',
        'id_cgu',
        'id_customer',
        'type',
        'title',
        'prestation_start',
        'working_time',
    ];
}
