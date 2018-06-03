<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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
    protected $appends = [
        'human',
    ];
    protected $dates = [
        'created_at',
        'updated_at',
        'prestation_start'
    ];

    
    public function user() {
        return $this->belongsTo('App\User', 'id_user');
    }

    public function cgu() {
        return $this->belongsTo('App\Cgu', 'id_cgu');
    }

    public function customer() {
        return $this->belongsTo('App\Customer', 'id_customer');
    }

    public function tasks() {
        return $this->hasMany('App\Tasks', 'id_devis');
    }

    public function getHumanAttribute() {
        setlocale(LC_TIME, "fr_FR");
        
        return (object) [
            'human'   => (object) [
                'prestation_start' => $this->prestation_start->formatLocalized('%d %B %Y'),
                'created_at'       => $this->created_at->formatLocalized('%d %B %Y')
            ],
        ];
    }
}
