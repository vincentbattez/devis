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
        'working_price',
    ];
    protected $appends = [
        'human',
        'nb_type',
        'calculs',
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
            'prestation_start' => $this->prestation_start->formatLocalized('%d %B %Y'),
            'created_at'       => $this->created_at->formatLocalized('%d %B %Y')
        ];
    }

    public function getNbTypeAttribute() {
        $firstLetter = ucfirst($this->type[0]);
        $lastLetter  = ucfirst(substr($this->type, -1));
        $nbType      = $this->where('type', 'like', $this->type)->count('type');

        return $firstLetter . $lastLetter . $nbType;
    }

    public function getCalculsAttribute() {   
        $price_full = 0;
        $day        = 0;

        foreach ($this->tasks as $task) {
            $price_full += $this->working_price * $task->duration;
            $day        += round($task->duration / $this->working_time, 0);
        }
        $price_decimal = priceDecimal($price_full);
        $price_centime = priceCentime($price_full);

        $day_human = $this->prestation_start->addDays($day)->formatLocalized('%d %B %Y');

        return (object) [
            'day'       => $day,
            'day_human' => $day_human,
            'price'     => (object) [
                'full'    => $price_full,
                'decimal' => $price_decimal,
                'centime' => $price_centime
            ]
        ];
    }
}
