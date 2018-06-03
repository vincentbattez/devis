<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    protected $table = 'vbd_tasks';
    protected $fillable = [
        'id_devis',
        'title',
        'tasks',
        'duration',
        'type',
        'free',
        'category',
    ];
}
