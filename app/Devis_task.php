<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Devis_task extends Model
{
    protected $table = 'vbd_devis_tasks';
    protected $fillable = [
        'id_devis',
        'id_tasks',
    ];
    public $timestamps = false;
}
