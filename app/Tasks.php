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
    protected $appends = [
        'calculs'
    ];

    public function devis() {
        return $this->belongsTo('App\Devis', 'id_devis');
    }

    public function getCalculsAttribute() {
        return (object) [
            'day' => round($this->duration / $this->devis->working_time, 0),
        ];
    }

}
